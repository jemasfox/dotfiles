Vim�UnDo� �l_N�a������|VJםuUg���9��S	   
   a$obj->AddForeignKey('userapprovalgroups_groupid_fkey', 'groupaccounts', 'groupid', 'groupid', 1);      (                       ZK��    _�                             ����                                                                                                                                                                                                                                                                                                                                                             ZK�O     �                   �               5�_�                            ����                                                                                                                                                                                                                                                                                                                                                             ZK�T     �                  5�_�                           ����                                                                                                                                                                                                                                                                                                                                                             ZK�_     �         
      L$obj->AddColumn(array('name'=>'groupid', 'type'=>'int', 'nullable'=>false));5�_�                       !    ����                                                                                                                                                                                                                                                                                                                                                             ZK�w     �         
      1$obj->AddPrimaryKey('pk_usergroup', 'userid', 1);5�_�                           ����                                                                                                                                                                                                                                                                                                                                                             ZK�~     �         
      '$obj->AddPrimaryKeyUsage('groupid', 2);5�_�                           ����                                                                                                                                                                                                                                                                                                                                                             ZK��     �      	   
      X$obj->AddForeignKey('usergroup_groupid_fkey', 'groupaccounts', 'groupid', 'groupid', 1);5�_�                       '    ����                                                                                                                                                                                                                                                                                                                                                             ZK��     �         
      /$obj->AddPrimaryKeyUsage('approvalgroupid', 2);5�_�      	                 &    ����                                                                                                                                                                                                                                                                                                                                                             ZK��     �      	   
      `$obj->AddForeignKey('userapprovalgroup_groupid_fkey', 'groupaccounts', 'groupid', 'groupid', 1);5�_�      
           	      (    ����                                                                                                                                                                                                                                                                                                                                                             ZK��     �         
      0$obj->AddPrimaryKeyUsage('approvalgroupsid', 2);5�_�   	              
   	       ����                                                                                                                                                                                                                                                                                                                                                             ZK��     �      
   
      T$obj->AddForeignKey('usergroup_userid_fkey', 'useraccounts', 'userid', 'userid', 1);5�_�   
                 	   &    ����                                                                                                                                                                                                                                                                                                                                                             ZK��     �      
   
      \$obj->AddForeignKey('userapprovalgroup_userid_fkey', 'useraccounts', 'userid', 'userid', 1);5�_�                       (    ����                                                                                                                                                                                                                                                                                                                                                             ZK��     �      	   
      a$obj->AddForeignKey('userapprovalgroups_groupid_fkey', 'groupaccounts', 'groupid', 'groupid', 1);5�_�                       M    ����                                                                                                                                                                                                                                                                                                                                                             ZK��     �      	   
      i$obj->AddForeignKey('userapprovalgroups_approvalgroupid_fkey', 'groupaccounts', 'groupid', 'groupid', 1);5�_�                       R    ����                                                                                                                                                                                                                                                                                                                                                             ZK��     �      	   
      j$obj->AddForeignKey('userapprovalgroups_approvalgroupid_fkey', 'approvalgroups', 'groupid', 'groupid', 1);5�_�                        e    ����                                                                                                                                                                                                                                                                                                                                                             ZK��    �      	   
      r$obj->AddForeignKey('userapprovalgroups_approvalgroupid_fkey', 'approvalgroups', 'approvalgroupid', 'groupid', 1);5��