-- Debugggers
return {
	'mfussenegger/nvim-dap',
	dependencies = {
		"microsoft/vscode-js-debug",
		lazy = true,
		build = "npm ci --legacy-peer-deps && npx gulp vsDebugServerBundle && mv dist out"
	}
}
