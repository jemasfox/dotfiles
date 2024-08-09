return {
	{
		'VonHeikemen/lsp-zero.nvim',
		lazy = false,
		branch = 'v2.x',
		dependencies = {
			-- {{{ LSP Manager (Mason)
			{
				'williamboman/mason.nvim',
				build = function()
					pcall(vim.cmd, 'MasonUpdate')
				end
			},
			'williamboman/mason-lspconfig.nvim',
			-- }}}
			-- {{{ LSP Configurations
			{
				'neovim/nvim-lspconfig',
				dependencies = { 'williamboman/mason.nvim', 'williamboman/mason-lspconfig.nvim' },
				config = function()
					local lspConfig = require('lspconfig')

					lspConfig.lua_ls.setup({
						settings = {
							Lua = {
								diagnostics = {
									globals = { 'vim' }
								},
								workspace = {
									library = vim.api.nvim_get_runtime_file("", true)
								}
							}
						}
					})

					local typescriptConfig = {
						format = {
							insertSpaceAfterOpeningAndBeforeClosingNonemptyBraces = true
						}
					}

					local util = require('lspconfig.util');
					local root_dir = util.root_pattern('.git');
					lspConfig.volar.setup({
						filetypes = { 'typescript', 'javascript', 'javascriptreact', 'typescriptreact', 'vue', 'json' },
						root_dir = root_dir,
						settings = {
							vue = {
								complete = {
									casing = {
										tags = 'autoKebab'
									}
								}
							}
						}
					})
					-- I tried the below but kept getting errors about package not found, so instead assuming the
					-- default location of mason packages are used
					-- local ts_plugin_path = mason_registry.get_package('vue-language-server'):get_install_path() ..
					-- '/node_modules/@vue/language-server/node_modules/@vue/typescript-plugin'
					local ts_plugin_path = vim.fn.stdpath("data") ..
						'/mason/packages/vue-language-server/node_modules/@vue/language-server/node_modules/@vue/typescript-plugin'
					lspConfig.tsserver.setup({
						filetypes = { 'typescript', 'javascript', 'javascriptreact', 'typescriptreact', 'vue', 'json' },
						root_dir = root_dir,
						init_options = {
							plugins = {
								{
									name = "@vue/typescript-plugin",
									location = ts_plugin_path,
									languages = { "typescript", "vue" },
								}
							},
							preferences = {
								importModuleSpecifier = 'non-relative',
								importModuleSpecifierEnding = 'js'
							}
						},
						settings = {
							typescript = typescriptConfig,
							javascript = typescriptConfig,
						}
					})
					vim.keymap.set('n', '<leader>r', function()
						vim.cmd('LspRestart tsserver');
					end, {})
				end
			},
			-- }}}
			-- {{{ Autocompletion
			{
				'hrsh7th/nvim-cmp',
				event = 'InsertEnter',
				dependencies = {
					'hrsh7th/cmp-nvim-lsp',
					'onsails/lspkind.nvim',
					'L3MON4D3/LuaSnip',
					{
						"zbirenbaum/copilot-cmp",
						dependencies = {
							"zbirenbaum/copilot.lua",
							config = function()
								require("copilot").setup()
							end
						},
						config = function()
							require("copilot_cmp").setup()
						end,
					}
				},
				config = function()
					local cmp = require('cmp')
					local cmp_select = { behavior = cmp.SelectBehavior.Select }
					local has_words_before = function()
						if vim.api.nvim_buf_get_option(0, "buftype") == "prompt" then return false end
						local line, col = unpack(vim.api.nvim_win_get_cursor(0))
						return col ~= 0 and
							vim.api.nvim_buf_get_text(0, line - 1, 0, line - 1, col, {})[1]:match("^%s*$") == nil
					end

					local lsp = require('lsp-zero')
					local cmp_mappings = lsp.defaults.cmp_mappings({
						['<C-p>'] = cmp.mapping.select_prev_item(cmp_select),
						['<C-n>'] = cmp.mapping.select_next_item(cmp_select),
						['<C-y>'] = cmp.mapping.confirm({ select = true }),
						['<CR>'] = cmp.mapping.confirm({ select = false }),
						['<C-Space>'] = cmp.mapping.complete(),
						['<Tab>'] = vim.schedule_wrap(function(fallback)
							if cmp.visible() and has_words_before() then
								cmp.select_next_item({ behavior = cmp.SelectBehavior.Select })
							else
								fallback()
							end
						end),
					})

					local lspkind = require('lspkind')
					lspkind.init({
						symbol_map = {
							Copilot = "",
						},
					})
					vim.api.nvim_set_hl(0, "CmpItemKindCopilot", { fg = "#6CC644" })


					lsp.setup_nvim_cmp({
						mapping = cmp_mappings,
						sources = {
							{ name = "copilot",  group_index = 2 },
							{ name = "nvim_lsp", group_index = 2 },
							{ name = "path",     group_index = 2 },
							{ name = "luasnip",  group_index = 2 },
						},
						formatting = {
							format = lspkind.cmp_format({
								maxwidth = 100, -- prevent the popup from showing more than provided characters (e.g 50 will not show more than 50 characters)
								ellipsis_char = '...', -- when popup menu exceed maxwidth, the truncated part would show ellipsis_char instead (must define maxwidth first)
							})
						}
					})
				end
			},
			--- }}}
			-- {{{ Formatters and Linters
			{
				'jose-elias-alvarez/null-ls.nvim',
				dependencies = {
					{
						'davidmh/cspell.nvim',
						dependencies = {
							'nvim-lua/plenary.nvim'
						}
					}
				},
				config = function()
					local cSpell = require('cspell')
					local cSpellConfig = {
						find_json = function(cwd)
							return os.getenv("HOME") .. '/.spellings.json'
						end,
					}

					local nullLs = require('null-ls')
					nullLs.setup({
						sources = {
							nullLs.builtins.formatting.prettierd,
							nullLs.builtins.formatting.shfmt.with({
								filetypes = { 'sh', 'bash' }
							}),
							cSpell.diagnostics.with({
								config = cSpellConfig,
								diagnostics_postprocess = function(diagnostic)
									diagnostic.severity = diagnostic.message:find("really") and
										vim.diagnostic.severity["ERROR"]
										or vim.diagnostic.severity["WARN"]
								end,
							}),
							cSpell.code_actions.with({ config = cSpellConfig }),
						}
					})
				end
			}
			-- }}}
		},
		config = function()
			local lsp = require('lsp-zero')
			lsp.preset('recommended')
			lsp.ensure_installed({
				'volar',
				'tsserver',
				'eslint',
				'rust_analyzer',
				'jsonls',
				'lua_ls',
				'bashls'
			})
			local allowedFormatters = {
				lua_ls = true,
				['null-ls'] = true
			}
			local lspFormatting = function(buffer, async)
				vim.lsp.buf.format({
					filter = function(client)
						return allowedFormatters[client.name]
					end,
					bufnr = buffer,
					async = async,
					timeout_ms = 2000
				})
			end

			local augroup = vim.api.nvim_create_augroup("LspFormatting", {})
			lsp.on_attach(function(client, bufnr)
				local opts = { buffer = bufnr, remap = false }
				vim.keymap.set('n', 'gd', vim.lsp.buf.definition, opts)
				vim.keymap.set('n', 'gy', vim.lsp.buf.type_definition, opts)
				vim.keymap.set('n', 'gi', vim.lsp.buf.implementation, opts)
				vim.keymap.set('n', 'K', vim.lsp.buf.hover, opts)
				vim.keymap.set('n', '<leader>vws', vim.lsp.buf.workspace_symbol, opts)
				vim.keymap.set('n', '<leader>vd', vim.diagnostic.open_float, opts)
				vim.keymap.set('n', '[d', vim.diagnostic.goto_next, opts)
				vim.keymap.set('n', ']d', vim.diagnostic.goto_prev, opts)
				vim.keymap.set('n', '<leader>vca', vim.lsp.buf.code_action, opts)
				vim.keymap.set('n', '<leader>vrr', vim.lsp.buf.references, opts)
				vim.keymap.set('n', '<leader>lf', '<cmd>EslintFixAll<CR>')

				-- formatting cmds
				vim.keymap.set('n', '<leader>f', function() lspFormatting(bufnr, true) end, opts)
				if client.supports_method("textDocument/formatting") then
					vim.api.nvim_clear_autocmds({ group = augroup, buffer = bufnr })
					vim.api.nvim_create_autocmd("BufWritePre", {
						group = augroup,
						buffer = bufnr,
						callback = function()
							lspFormatting(bufnr, false)
						end,
					})
				end
			end)
			lsp.setup()
		end
	},
}
