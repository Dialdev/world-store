<?php return array (
  '1263358e0a1b8d00a5a644d144891233' => 
  array (
    'criteria' => 
    array (
      'name' => 'tickets',
    ),
    'object' => 
    array (
      'name' => 'tickets',
      'path' => '{core_path}components/tickets/',
      'assets_path' => '',
    ),
  ),
  '4c9e0da2d88322280690145157288cc1' => 
  array (
    'criteria' => 
    array (
      'key' => 'tickets.date_format',
    ),
    'object' => 
    array (
      'key' => 'tickets.date_format',
      'value' => '%d.%m.%y <small>%H:%M</small>',
      'xtype' => 'textfield',
      'namespace' => 'tickets',
      'area' => 'tickets.main',
      'editedon' => NULL,
    ),
  ),
  'fcef72f770922c7ab24bf945c302445a' => 
  array (
    'criteria' => 
    array (
      'key' => 'tickets.enable_editor',
    ),
    'object' => 
    array (
      'key' => 'tickets.enable_editor',
      'value' => '1',
      'xtype' => 'combo-boolean',
      'namespace' => 'tickets',
      'area' => 'tickets.main',
      'editedon' => NULL,
    ),
  ),
  'edf58988454397fb223a0e75fa2d04d9' => 
  array (
    'criteria' => 
    array (
      'key' => 'tickets.frontend_css',
    ),
    'object' => 
    array (
      'key' => 'tickets.frontend_css',
      'value' => '[[+cssUrl]]web/default.css',
      'xtype' => 'textfield',
      'namespace' => 'tickets',
      'area' => 'tickets.main',
      'editedon' => NULL,
    ),
  ),
  'ccc347466c7d46dbf4174621183f3831' => 
  array (
    'criteria' => 
    array (
      'key' => 'tickets.frontend_js',
    ),
    'object' => 
    array (
      'key' => 'tickets.frontend_js',
      'value' => '[[+jsUrl]]web/default.js',
      'xtype' => 'textfield',
      'namespace' => 'tickets',
      'area' => 'tickets.main',
      'editedon' => NULL,
    ),
  ),
  '42b7e4b5c9c4e6109838cce1768c08a4' => 
  array (
    'criteria' => 
    array (
      'key' => 'tickets.editor_config.ticket',
    ),
    'object' => 
    array (
      'key' => 'tickets.editor_config.ticket',
      'value' => '{onTab: {keepDefault:false, replaceWith:"	"}
		,markupSet: [
			{name:"Bold", className: "btn-bold", key:"B", openWith:"<b>", closeWith:"</b>" }
			,{name:"Italic", className: "btn-italic", key:"I", openWith:"<i>", closeWith:"</i>"  }
			,{name:"Underline", className: "btn-underline", key:"U", openWith:"<u>", closeWith:"</u>" }
			,{name:"Stroke through", className: "btn-stroke", key:"S", openWith:"<s>", closeWith:"</s>" }
			,{separator:"---------------" }
			,{name:"Bulleted List", className: "btn-bulleted", openWith:"	<li>", closeWith:"</li>", multiline:true, openBlockWith:"<ul>\\n", closeBlockWith:"\\n</ul>"}
			,{name:"Numeric List", className: "btn-numeric", openWith:"	<li>", closeWith:"</li>", multiline:true, openBlockWith:"<ol>\\n", closeBlockWith:"\\n</ol>"}
			,{separator:"---------------" }
			,{name:"Quote", className: "btn-quote", openWith:"<blockquote>", closeWith:"</blockquote>"}
			,{name:"Code", className: "btn-code", openWith:"<code>", closeWith:"</code>"}
			,{name:"Link", className: "btn-link", openWith:"<a href=\\"[![Link:!:http://]!]\\">", closeWith:"</a>" }
			,{name:"Picture", className: "btn-picture", replaceWith:"<img src=\\"[![Source:!:http://]!]\\" />" }
			,{separator:"---------------" }
			,{name:"Cut", className: "btn-cut", openWith:"<cut/>" }
		]}',
      'xtype' => 'textarea',
      'namespace' => 'tickets',
      'area' => 'tickets.ticket',
      'editedon' => NULL,
    ),
  ),
  '6c8e6d09cf7fc602615d7249f56c6297' => 
  array (
    'criteria' => 
    array (
      'key' => 'tickets.editor_config.comment',
    ),
    'object' => 
    array (
      'key' => 'tickets.editor_config.comment',
      'value' => '{onTab: {keepDefault:false, replaceWith:"	"}
		,markupSet: [
			{name:"Bold", className: "btn-bold", key:"B", openWith:"<b>", closeWith:"</b>" }
			,{name:"Italic", className: "btn-italic", key:"I", openWith:"<i>", closeWith:"</i>"  }
			,{name:"Underline", className: "btn-underline", key:"U", openWith:"<u>", closeWith:"</u>" }
			,{name:"Stroke through", className: "btn-stroke", key:"S", openWith:"<s>", closeWith:"</s>" }
			,{separator:"---------------" }
			,{name:"Quote", className: "btn-quote", openWith:"<blockquote>", closeWith:"</blockquote>"}
			,{name:"Code", className: "btn-code", openWith:"<code>", closeWith:"</code>"}
			,{name:"Link", className: "btn-link", openWith:"<a href=\\"[![Link:!:http://]!]\\">", closeWith:"</a>" }
			,{name:"Picture", className: "btn-picture", replaceWith:"<img src=\\"[![Source:!:http://]!]\\" />" }
		]}',
      'xtype' => 'textarea',
      'namespace' => 'tickets',
      'area' => 'tickets.comment',
      'editedon' => NULL,
    ),
  ),
  '28805bf84114bd9e03a1a78b8b337012' => 
  array (
    'criteria' => 
    array (
      'key' => 'tickets.default_template',
    ),
    'object' => 
    array (
      'key' => 'tickets.default_template',
      'value' => '',
      'xtype' => 'modx-combo-template',
      'namespace' => 'tickets',
      'area' => 'tickets.ticket',
      'editedon' => NULL,
    ),
  ),
  '07ff4a3558cbea7ac7dad85abd6afa04' => 
  array (
    'criteria' => 
    array (
      'key' => 'tickets.snippet_prepare_comment',
    ),
    'object' => 
    array (
      'key' => 'tickets.snippet_prepare_comment',
      'value' => '',
      'xtype' => 'textfield',
      'namespace' => 'tickets',
      'area' => 'tickets.comment',
      'editedon' => NULL,
    ),
  ),
  'f375084a082e8a6e54d046c695c0d85f' => 
  array (
    'criteria' => 
    array (
      'key' => 'tickets.comment_edit_time',
    ),
    'object' => 
    array (
      'key' => 'tickets.comment_edit_time',
      'value' => '600',
      'xtype' => 'numberfield',
      'namespace' => 'tickets',
      'area' => 'tickets.comment',
      'editedon' => NULL,
    ),
  ),
  '99ef6cdc4d0c1ede1a4d19b64309b0b0' => 
  array (
    'criteria' => 
    array (
      'key' => 'tickets.clear_cache_on_comment_save',
    ),
    'object' => 
    array (
      'key' => 'tickets.clear_cache_on_comment_save',
      'value' => '',
      'xtype' => 'combo-boolean',
      'namespace' => 'tickets',
      'area' => 'tickets.comment',
      'editedon' => NULL,
    ),
  ),
  'a8dc9f306574cf64e4f24fb37a69dae4' => 
  array (
    'criteria' => 
    array (
      'key' => 'tickets.private_ticket_page',
    ),
    'object' => 
    array (
      'key' => 'tickets.private_ticket_page',
      'value' => '0',
      'xtype' => 'numberfield',
      'namespace' => 'tickets',
      'area' => 'tickets.ticket',
      'editedon' => NULL,
    ),
  ),
  'df306604ad8bc12c79ccb41cd6ed9bb7' => 
  array (
    'criteria' => 
    array (
      'key' => 'tickets.unpublished_ticket_page',
    ),
    'object' => 
    array (
      'key' => 'tickets.unpublished_ticket_page',
      'value' => '0',
      'xtype' => 'numberfield',
      'namespace' => 'tickets',
      'area' => 'tickets.ticket',
      'editedon' => NULL,
    ),
  ),
  'e3f707c1ee39cd8fff019bd63e1b65c6' => 
  array (
    'criteria' => 
    array (
      'key' => 'tickets.ticket_max_cut',
    ),
    'object' => 
    array (
      'key' => 'tickets.ticket_max_cut',
      'value' => '1000',
      'xtype' => 'numberfield',
      'namespace' => 'tickets',
      'area' => 'tickets.ticket',
      'editedon' => NULL,
    ),
  ),
  '5e20054d5bd2d13bfff7cef8b9eb78e5' => 
  array (
    'criteria' => 
    array (
      'key' => 'tickets.mail_from',
    ),
    'object' => 
    array (
      'key' => 'tickets.mail_from',
      'value' => '',
      'xtype' => 'textfield',
      'namespace' => 'tickets',
      'area' => 'tickets.mail',
      'editedon' => NULL,
    ),
  ),
  'c177af286409f92fb9426e30df7e475f' => 
  array (
    'criteria' => 
    array (
      'key' => 'tickets.mail_from_name',
    ),
    'object' => 
    array (
      'key' => 'tickets.mail_from_name',
      'value' => '',
      'xtype' => 'textfield',
      'namespace' => 'tickets',
      'area' => 'tickets.mail',
      'editedon' => NULL,
    ),
  ),
  '419429cbf4d350771d7193f6a298a9ed' => 
  array (
    'criteria' => 
    array (
      'key' => 'tickets.mail_queue',
    ),
    'object' => 
    array (
      'key' => 'tickets.mail_queue',
      'value' => '',
      'xtype' => 'combo-boolean',
      'namespace' => 'tickets',
      'area' => 'tickets.mail',
      'editedon' => NULL,
    ),
  ),
  '0aab0bf30c3991b617762a6b926676be' => 
  array (
    'criteria' => 
    array (
      'key' => 'tickets.mail_bcc',
    ),
    'object' => 
    array (
      'key' => 'tickets.mail_bcc',
      'value' => '',
      'xtype' => 'textfield',
      'namespace' => 'tickets',
      'area' => 'tickets.mail',
      'editedon' => NULL,
    ),
  ),
  '5765cd10dbdccd3b45b9445991d2f74f' => 
  array (
    'criteria' => 
    array (
      'key' => 'tickets.mail_bcc_level',
    ),
    'object' => 
    array (
      'key' => 'tickets.mail_bcc_level',
      'value' => '1',
      'xtype' => 'numberfield',
      'namespace' => 'tickets',
      'area' => 'tickets.mail',
      'editedon' => NULL,
    ),
  ),
  '72f78e10cd9120c37698597a1cbbf43f' => 
  array (
    'criteria' => 
    array (
      'key' => 'tickets.section_content_default',
    ),
    'object' => 
    array (
      'key' => 'tickets.section_content_default',
      'value' => '[[!pdoPage?
	&element=`getTickets`
]]

[[!+page.nav]]',
      'xtype' => 'textarea',
      'namespace' => 'tickets',
      'area' => 'tickets.section',
      'editedon' => NULL,
    ),
  ),
  'bd5721ce46f775e5a5368b586843f0fd' => 
  array (
    'criteria' => 
    array (
      'key' => 'tickets.source_default',
    ),
    'object' => 
    array (
      'key' => 'tickets.source_default',
      'value' => '3',
      'xtype' => 'modx-combo-source',
      'namespace' => 'tickets',
      'area' => 'tickets.main',
      'editedon' => '2017-05-15 11:16:55',
    ),
  ),
  'f0b910c63477af4ea7b8853d4f6b9187' => 
  array (
    'criteria' => 
    array (
      'key' => 'tickets.count_guests',
    ),
    'object' => 
    array (
      'key' => 'tickets.count_guests',
      'value' => '',
      'xtype' => 'combo-boolean',
      'namespace' => 'tickets',
      'area' => 'tickets.ticket',
      'editedon' => NULL,
    ),
  ),
  '8237a468cd92cfd986738f2ccb99f2a4' => 
  array (
    'criteria' => 
    array (
      'name' => 'OnBeforeCommentSave',
    ),
    'object' => 
    array (
      'name' => 'OnBeforeCommentSave',
      'service' => 6,
      'groupname' => 'Tickets',
    ),
  ),
  '076ace01815c0a98621e8554a75be638' => 
  array (
    'criteria' => 
    array (
      'name' => 'OnCommentSave',
    ),
    'object' => 
    array (
      'name' => 'OnCommentSave',
      'service' => 6,
      'groupname' => 'Tickets',
    ),
  ),
  '05dbc0d6f88668f515670a6aa715f999' => 
  array (
    'criteria' => 
    array (
      'name' => 'OnBeforeCommentPublish',
    ),
    'object' => 
    array (
      'name' => 'OnBeforeCommentPublish',
      'service' => 6,
      'groupname' => 'Tickets',
    ),
  ),
  'd7df63bd05127ebb5ef3ad11f012b47e' => 
  array (
    'criteria' => 
    array (
      'name' => 'OnCommentPublish',
    ),
    'object' => 
    array (
      'name' => 'OnCommentPublish',
      'service' => 6,
      'groupname' => 'Tickets',
    ),
  ),
  'a22c883dfb0ff4fb05c1927bc30250c2' => 
  array (
    'criteria' => 
    array (
      'name' => 'OnBeforeCommentUnpublish',
    ),
    'object' => 
    array (
      'name' => 'OnBeforeCommentUnpublish',
      'service' => 6,
      'groupname' => 'Tickets',
    ),
  ),
  '835f299918ae66f491f5249a3745b0af' => 
  array (
    'criteria' => 
    array (
      'name' => 'OnCommentUnpublish',
    ),
    'object' => 
    array (
      'name' => 'OnCommentUnpublish',
      'service' => 6,
      'groupname' => 'Tickets',
    ),
  ),
  '7d094567c3429906a0267d24b57a899d' => 
  array (
    'criteria' => 
    array (
      'name' => 'OnBeforeCommentDelete',
    ),
    'object' => 
    array (
      'name' => 'OnBeforeCommentDelete',
      'service' => 6,
      'groupname' => 'Tickets',
    ),
  ),
  '867e601dd58dbeb4da69d281ee950562' => 
  array (
    'criteria' => 
    array (
      'name' => 'OnCommentDelete',
    ),
    'object' => 
    array (
      'name' => 'OnCommentDelete',
      'service' => 6,
      'groupname' => 'Tickets',
    ),
  ),
  '32391782efb09d97f4421183185e5ef0' => 
  array (
    'criteria' => 
    array (
      'name' => 'OnBeforeCommentUndelete',
    ),
    'object' => 
    array (
      'name' => 'OnBeforeCommentUndelete',
      'service' => 6,
      'groupname' => 'Tickets',
    ),
  ),
  'bca92c1889039d780a6270ea46f19444' => 
  array (
    'criteria' => 
    array (
      'name' => 'OnCommentUndelete',
    ),
    'object' => 
    array (
      'name' => 'OnCommentUndelete',
      'service' => 6,
      'groupname' => 'Tickets',
    ),
  ),
  '3a626d7df639af2f9d55e77fe7a8649b' => 
  array (
    'criteria' => 
    array (
      'name' => 'OnBeforeCommentRemove',
    ),
    'object' => 
    array (
      'name' => 'OnBeforeCommentRemove',
      'service' => 6,
      'groupname' => 'Tickets',
    ),
  ),
  '5c4c16075e89a2737eba71e3bdb179ba' => 
  array (
    'criteria' => 
    array (
      'name' => 'OnCommentRemove',
    ),
    'object' => 
    array (
      'name' => 'OnCommentRemove',
      'service' => 6,
      'groupname' => 'Tickets',
    ),
  ),
  '4d502727b8306bedbdb9ed62b236a0b1' => 
  array (
    'criteria' => 
    array (
      'name' => 'OnBeforeTicketThreadClose',
    ),
    'object' => 
    array (
      'name' => 'OnBeforeTicketThreadClose',
      'service' => 6,
      'groupname' => 'Tickets',
    ),
  ),
  'daec2031453bd64f9f526c8b833e4c40' => 
  array (
    'criteria' => 
    array (
      'name' => 'OnTicketThreadClose',
    ),
    'object' => 
    array (
      'name' => 'OnTicketThreadClose',
      'service' => 6,
      'groupname' => 'Tickets',
    ),
  ),
  'c99305f648a673f32d032239baed87b7' => 
  array (
    'criteria' => 
    array (
      'name' => 'OnBeforeTicketThreadOpen',
    ),
    'object' => 
    array (
      'name' => 'OnBeforeTicketThreadOpen',
      'service' => 6,
      'groupname' => 'Tickets',
    ),
  ),
  '2eba7cb4ff851f3cdcf5583ca3e76ac4' => 
  array (
    'criteria' => 
    array (
      'name' => 'OnTicketThreadOpen',
    ),
    'object' => 
    array (
      'name' => 'OnTicketThreadOpen',
      'service' => 6,
      'groupname' => 'Tickets',
    ),
  ),
  '83ebe284f93d91d5a31073ab2a40e6d6' => 
  array (
    'criteria' => 
    array (
      'name' => 'OnBeforeTicketThreadDelete',
    ),
    'object' => 
    array (
      'name' => 'OnBeforeTicketThreadDelete',
      'service' => 6,
      'groupname' => 'Tickets',
    ),
  ),
  '8d3d944cda0ec33c077139ab313c1bf8' => 
  array (
    'criteria' => 
    array (
      'name' => 'OnTicketThreadDelete',
    ),
    'object' => 
    array (
      'name' => 'OnTicketThreadDelete',
      'service' => 6,
      'groupname' => 'Tickets',
    ),
  ),
  'c8e27f0c53ec0b8f2d30a9f1a4556993' => 
  array (
    'criteria' => 
    array (
      'name' => 'OnBeforeTicketThreadUndelete',
    ),
    'object' => 
    array (
      'name' => 'OnBeforeTicketThreadUndelete',
      'service' => 6,
      'groupname' => 'Tickets',
    ),
  ),
  'ca02d93883e7b85006cf337a92ee7ba8' => 
  array (
    'criteria' => 
    array (
      'name' => 'OnTicketThreadUndelete',
    ),
    'object' => 
    array (
      'name' => 'OnTicketThreadUndelete',
      'service' => 6,
      'groupname' => 'Tickets',
    ),
  ),
  '621891d46ed310d339b831f114343aac' => 
  array (
    'criteria' => 
    array (
      'name' => 'OnBeforeTicketThreadRemove',
    ),
    'object' => 
    array (
      'name' => 'OnBeforeTicketThreadRemove',
      'service' => 6,
      'groupname' => 'Tickets',
    ),
  ),
  'd0554fb96b3d79379ea2c31fb74574d3' => 
  array (
    'criteria' => 
    array (
      'name' => 'OnTicketThreadRemove',
    ),
    'object' => 
    array (
      'name' => 'OnTicketThreadRemove',
      'service' => 6,
      'groupname' => 'Tickets',
    ),
  ),
  '20e4be30e2da208c0cdaa305309334c1' => 
  array (
    'criteria' => 
    array (
      'name' => 'OnTicketVote',
    ),
    'object' => 
    array (
      'name' => 'OnTicketVote',
      'service' => 6,
      'groupname' => 'Tickets',
    ),
  ),
  'b56197be65a4fb0c8a265e9fe9ab2da5' => 
  array (
    'criteria' => 
    array (
      'name' => 'OnCommentVote',
    ),
    'object' => 
    array (
      'name' => 'OnCommentVote',
      'service' => 6,
      'groupname' => 'Tickets',
    ),
  ),
  '8cedf51dc63dad602527c78a0242aa4e' => 
  array (
    'criteria' => 
    array (
      'name' => 'OnTicketStar',
    ),
    'object' => 
    array (
      'name' => 'OnTicketStar',
      'service' => 6,
      'groupname' => 'Tickets',
    ),
  ),
  '9b4d730732d83d24739532ff7c614424' => 
  array (
    'criteria' => 
    array (
      'name' => 'OnTicketUnStar',
    ),
    'object' => 
    array (
      'name' => 'OnTicketUnStar',
      'service' => 6,
      'groupname' => 'Tickets',
    ),
  ),
  '48638ba9f4f045cf47c6061da3139719' => 
  array (
    'criteria' => 
    array (
      'name' => 'OnCommentStar',
    ),
    'object' => 
    array (
      'name' => 'OnCommentStar',
      'service' => 6,
      'groupname' => 'Tickets',
    ),
  ),
  '7b1b0d5bd8a13c3b7ba37fcf27df505a' => 
  array (
    'criteria' => 
    array (
      'name' => 'OnCommentUnStar',
    ),
    'object' => 
    array (
      'name' => 'OnCommentUnStar',
      'service' => 6,
      'groupname' => 'Tickets',
    ),
  ),
  '5dbe18e2df77ff0a5e7cf002b7dec72b' => 
  array (
    'criteria' => 
    array (
      'name' => 'TicketUserPolicy',
    ),
    'object' => 
    array (
      'id' => 13,
      'name' => 'TicketUserPolicy',
      'description' => 'A policy for create and update Tickets.',
      'parent' => 0,
      'template' => 8,
      'class' => '',
      'data' => '{"ticket_delete":true,"ticket_publish":true,"ticket_save":true,"ticket_vote":true,"ticket_star":true,"comment_save":true,"comment_delete":true,"comment_remove":true,"comment_publish":true,"comment_vote":true,"comment_star":true,"ticket_file_upload":true,"ticket_file_delete":true,"thread_close":true,"thread_delete":true,"thread_remove":true}',
      'lexicon' => 'tickets:permissions',
    ),
  ),
  '4a9785986ee58661e323bd048788f399' => 
  array (
    'criteria' => 
    array (
      'name' => 'TicketSectionPolicy',
    ),
    'object' => 
    array (
      'id' => 14,
      'name' => 'TicketSectionPolicy',
      'description' => 'A policy for add tickets in section.',
      'parent' => 0,
      'template' => 9,
      'class' => '',
      'data' => '{"section_add_children":true}',
      'lexicon' => 'tickets:permissions',
    ),
  ),
  'e098f7a0a8299a28114407731ead313d' => 
  array (
    'criteria' => 
    array (
      'name' => 'TicketVipPolicy',
    ),
    'object' => 
    array (
      'id' => 15,
      'name' => 'TicketVipPolicy',
      'description' => 'A policy for create and update private Tickets.',
      'parent' => 0,
      'template' => 8,
      'class' => '',
      'data' => '{"ticket_delete":true,"ticket_publish":true,"ticket_save":true,"ticket_vote":true,"ticket_star":true,"comment_save":true,"comment_delete":true,"comment_remove":true,"comment_publish":true,"comment_vote":true,"comment_star":true,"ticket_view_private":true,"ticket_file_upload":true,"ticket_file_delete":true,"thread_close":true,"thread_delete":true,"thread_remove":true}',
      'lexicon' => 'tickets:permissions',
    ),
  ),
  'a11e315e5da2133599ecdf62fc87052b' => 
  array (
    'criteria' => 
    array (
      'name' => 'TicketsUserPolicyTemplate',
    ),
    'object' => 
    array (
      'id' => 8,
      'template_group' => 1,
      'name' => 'TicketsUserPolicyTemplate',
      'description' => 'A policy for users to create Tickets and comments.',
      'lexicon' => 'tickets:permissions',
    ),
  ),
  '3bbd7356cda583728ae3e4474524bcb6' => 
  array (
    'criteria' => 
    array (
      'template' => 8,
      'name' => 'ticket_delete',
    ),
    'object' => 
    array (
      'id' => 220,
      'template' => 8,
      'name' => 'ticket_delete',
      'description' => 'ticket_delete',
      'value' => 1,
    ),
  ),
  'd3628982db73cd9601e1a4a5ede7f545' => 
  array (
    'criteria' => 
    array (
      'template' => 8,
      'name' => 'ticket_publish',
    ),
    'object' => 
    array (
      'id' => 221,
      'template' => 8,
      'name' => 'ticket_publish',
      'description' => 'ticket_publish',
      'value' => 1,
    ),
  ),
  '5480e119066efbb8b7a15c833f2df165' => 
  array (
    'criteria' => 
    array (
      'template' => 8,
      'name' => 'ticket_save',
    ),
    'object' => 
    array (
      'id' => 222,
      'template' => 8,
      'name' => 'ticket_save',
      'description' => 'ticket_save',
      'value' => 1,
    ),
  ),
  '42875fc4ffac37acf9b116d6b980fb69' => 
  array (
    'criteria' => 
    array (
      'template' => 8,
      'name' => 'ticket_view_private',
    ),
    'object' => 
    array (
      'id' => 223,
      'template' => 8,
      'name' => 'ticket_view_private',
      'description' => 'ticket_view_private',
      'value' => 1,
    ),
  ),
  '915dd9f6c9c5c6877fd5896710f50e6d' => 
  array (
    'criteria' => 
    array (
      'template' => 8,
      'name' => 'ticket_vote',
    ),
    'object' => 
    array (
      'id' => 224,
      'template' => 8,
      'name' => 'ticket_vote',
      'description' => 'ticket_vote',
      'value' => 1,
    ),
  ),
  '5ce67922e4ad40c3b7d6fc079ef4bffb' => 
  array (
    'criteria' => 
    array (
      'template' => 8,
      'name' => 'ticket_star',
    ),
    'object' => 
    array (
      'id' => 225,
      'template' => 8,
      'name' => 'ticket_star',
      'description' => 'ticket_star',
      'value' => 1,
    ),
  ),
  '783091c43acabaed2b6a037f15933e7a' => 
  array (
    'criteria' => 
    array (
      'template' => 8,
      'name' => 'comment_save',
    ),
    'object' => 
    array (
      'id' => 226,
      'template' => 8,
      'name' => 'comment_save',
      'description' => 'comment_save',
      'value' => 1,
    ),
  ),
  '0e230331e70acd6383a7731a8d9c7d86' => 
  array (
    'criteria' => 
    array (
      'template' => 8,
      'name' => 'comment_delete',
    ),
    'object' => 
    array (
      'id' => 227,
      'template' => 8,
      'name' => 'comment_delete',
      'description' => 'comment_delete',
      'value' => 1,
    ),
  ),
  '70c13b19f2ae2b196709547eeadf88d4' => 
  array (
    'criteria' => 
    array (
      'template' => 8,
      'name' => 'comment_remove',
    ),
    'object' => 
    array (
      'id' => 228,
      'template' => 8,
      'name' => 'comment_remove',
      'description' => 'comment_remove',
      'value' => 1,
    ),
  ),
  '5b11aae19ccdd8d42098be34e3a6b5e8' => 
  array (
    'criteria' => 
    array (
      'template' => 8,
      'name' => 'comment_publish',
    ),
    'object' => 
    array (
      'id' => 229,
      'template' => 8,
      'name' => 'comment_publish',
      'description' => 'comment_publish',
      'value' => 1,
    ),
  ),
  'e033438bad7370353a49d0d8db6cf302' => 
  array (
    'criteria' => 
    array (
      'template' => 8,
      'name' => 'comment_vote',
    ),
    'object' => 
    array (
      'id' => 230,
      'template' => 8,
      'name' => 'comment_vote',
      'description' => 'comment_vote',
      'value' => 1,
    ),
  ),
  'c922d3c953f131973ecf40df31d4849b' => 
  array (
    'criteria' => 
    array (
      'template' => 8,
      'name' => 'comment_star',
    ),
    'object' => 
    array (
      'id' => 231,
      'template' => 8,
      'name' => 'comment_star',
      'description' => 'comment_star',
      'value' => 1,
    ),
  ),
  '0663152f6427250dbee2db545b772b87' => 
  array (
    'criteria' => 
    array (
      'template' => 8,
      'name' => 'ticket_file_upload',
    ),
    'object' => 
    array (
      'id' => 232,
      'template' => 8,
      'name' => 'ticket_file_upload',
      'description' => 'ticket_file_upload',
      'value' => 1,
    ),
  ),
  '028ca6938d3da870db500aa08be4a51b' => 
  array (
    'criteria' => 
    array (
      'template' => 8,
      'name' => 'ticket_file_delete',
    ),
    'object' => 
    array (
      'id' => 233,
      'template' => 8,
      'name' => 'ticket_file_delete',
      'description' => 'ticket_file_delete',
      'value' => 1,
    ),
  ),
  '2dad66ceeefdfbd4afb0710705f6bf81' => 
  array (
    'criteria' => 
    array (
      'template' => 8,
      'name' => 'thread_close',
    ),
    'object' => 
    array (
      'id' => 234,
      'template' => 8,
      'name' => 'thread_close',
      'description' => 'thread_close',
      'value' => 1,
    ),
  ),
  '04515433be766f9c9631e0c0c6ad8727' => 
  array (
    'criteria' => 
    array (
      'template' => 8,
      'name' => 'thread_delete',
    ),
    'object' => 
    array (
      'id' => 235,
      'template' => 8,
      'name' => 'thread_delete',
      'description' => 'thread_delete',
      'value' => 1,
    ),
  ),
  '0d67f12d8cc1fc14e31f795edaa3bcf1' => 
  array (
    'criteria' => 
    array (
      'template' => 8,
      'name' => 'thread_remove',
    ),
    'object' => 
    array (
      'id' => 236,
      'template' => 8,
      'name' => 'thread_remove',
      'description' => 'thread_remove',
      'value' => 1,
    ),
  ),
  'efc657e06f9cb179a83394b8834af584' => 
  array (
    'criteria' => 
    array (
      'name' => 'TicketsSectionPolicyTemplate',
    ),
    'object' => 
    array (
      'id' => 9,
      'template_group' => 3,
      'name' => 'TicketsSectionPolicyTemplate',
      'description' => 'A policy for users to add Tickets to section.',
      'lexicon' => 'tickets:permissions',
    ),
  ),
  '3a31f4f9783dabdba31fc4ebcb1dda3d' => 
  array (
    'criteria' => 
    array (
      'template' => 9,
      'name' => 'section_add_children',
    ),
    'object' => 
    array (
      'id' => 237,
      'template' => 9,
      'name' => 'section_add_children',
      'description' => 'section_add_children',
      'value' => 1,
    ),
  ),
  '5cb63c2b896a586ffc369787c2c855bb' => 
  array (
    'criteria' => 
    array (
      'namespace' => 'tickets',
      'controller' => 'index',
    ),
    'object' => 
    array (
      'id' => 6,
      'namespace' => 'tickets',
      'controller' => 'index',
      'haslayout' => 1,
      'lang_topics' => 'tickets:default',
      'assets' => '',
      'help_url' => '',
    ),
  ),
  '566a8317f51cd57a3d515c0713efbbe8' => 
  array (
    'criteria' => 
    array (
      'text' => 'tickets',
    ),
    'object' => 
    array (
      'text' => 'tickets',
      'parent' => 'components',
      'action' => '6',
      'description' => 'ticket_menu_desc',
      'icon' => 'images/icons/plugin.gif',
      'menuindex' => 0,
      'params' => '',
      'handler' => '',
      'permissions' => '',
      'namespace' => 'core',
    ),
  ),
  '602998190f29a905dedb9fb184fc656a' => 
  array (
    'criteria' => 
    array (
      'category' => 'Tickets',
    ),
    'object' => 
    array (
      'id' => 12,
      'parent' => 0,
      'category' => 'Tickets',
      'rank' => 0,
    ),
  ),
  '471b2134adcbb9c3ba35074712e769fa' => 
  array (
    'criteria' => 
    array (
      'name' => 'tpl.Tickets.form.create',
    ),
    'object' => 
    array (
      'id' => 23,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'tpl.Tickets.form.create',
      'description' => '',
      'editor_type' => 0,
      'category' => 12,
      'cache_type' => 0,
      'snippet' => '<form class="well create" method="post" action="" id="ticketForm">
	<div id="ticket-preview-placeholder"></div>

	<input type="hidden" name="tid" value="0" />

	<div class="form-group">
		<label for="ticket-sections">[[%tickets_section]]</label>
		<select name="parent" class="form-control" id="ticket-sections">[[+sections]]</select>
		<span class="error"></span>
	</div>

	<div class="form-group">
		<label for="ticket-pagetitle">[[%ticket_pagetitle]]</label>
		<input type="text" class="form-control" placeholder="[[%ticket_pagetitle]]" name="pagetitle" value="" maxlength="50" id="ticket-pagetitle"/>
		<span class="error"></span>
	</div>

	<div class="form-group">
		<textarea class="form-control" placeholder="[[%ticket_content]]" name="content" id="ticket-editor" rows="10"></textarea>
		<span class="error"></span>
	</div>

	<div class="ticket-form-files">
		[[+files]]
	</div>

	<div class="form-actions row">
		<div class="col-md-6">
			<input type="button" class="btn btn-default preview" value="[[%ticket_preview]]" title="Ctrl + Enter" />
		</div>
		<div class="col-md-6 move-right">
			<input type="button" class="btn btn-primary publish" name="publish" value="[[%ticket_publish]]" title="" />
			<input type="submit" class="btn btn-danger draft" name="draft" value="[[%ticket_draft]]" title="Ctrl + Shift + Enter" />
		</div>
	</div>
</form>',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => 'core/components/tickets/elements/chunks/chunk.form_create.tpl',
      'content' => '<form class="well create" method="post" action="" id="ticketForm">
	<div id="ticket-preview-placeholder"></div>

	<input type="hidden" name="tid" value="0" />

	<div class="form-group">
		<label for="ticket-sections">[[%tickets_section]]</label>
		<select name="parent" class="form-control" id="ticket-sections">[[+sections]]</select>
		<span class="error"></span>
	</div>

	<div class="form-group">
		<label for="ticket-pagetitle">[[%ticket_pagetitle]]</label>
		<input type="text" class="form-control" placeholder="[[%ticket_pagetitle]]" name="pagetitle" value="" maxlength="50" id="ticket-pagetitle"/>
		<span class="error"></span>
	</div>

	<div class="form-group">
		<textarea class="form-control" placeholder="[[%ticket_content]]" name="content" id="ticket-editor" rows="10"></textarea>
		<span class="error"></span>
	</div>

	<div class="ticket-form-files">
		[[+files]]
	</div>

	<div class="form-actions row">
		<div class="col-md-6">
			<input type="button" class="btn btn-default preview" value="[[%ticket_preview]]" title="Ctrl + Enter" />
		</div>
		<div class="col-md-6 move-right">
			<input type="button" class="btn btn-primary publish" name="publish" value="[[%ticket_publish]]" title="" />
			<input type="submit" class="btn btn-danger draft" name="draft" value="[[%ticket_draft]]" title="Ctrl + Shift + Enter" />
		</div>
	</div>
</form>',
    ),
  ),
  'f118265c79047c4784a06d239d1e8956' => 
  array (
    'criteria' => 
    array (
      'name' => 'tpl.Tickets.form.update',
    ),
    'object' => 
    array (
      'id' => 24,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'tpl.Tickets.form.update',
      'description' => '',
      'editor_type' => 0,
      'category' => 12,
      'cache_type' => 0,
      'snippet' => '<form class="well update" method="post" action="" id="ticketForm">
	<div id="ticket-preview-placeholder"></div>

	<input type="hidden" name="tid" value="[[+id]]" />

	<div class="form-group">
		<label for="ticket-sections">[[%tickets_section]]</label>
		<select name="parent" class="form-control" id="ticket-sections">[[+sections]]</select>
		<span class="error"></span>
	</div>

	<div class="form-group">
		<label for="ticket-pagetitle">[[%ticket_pagetitle]]</label>
		<input type="text" class="form-control" placeholder="[[%ticket_pagetitle]]" name="pagetitle" value="[[+pagetitle]]" maxlength="50" id="ticket-pagetitle"/>
		<span class="error"></span>
	</div>

	<div class="form-group">
		<textarea class="form-control" placeholder="[[%ticket_content]]" name="content" id="ticket-editor" rows="10">[[+content]]</textarea>
		<span class="error"></span>
	</div>

	<div class="ticket-form-files">
		[[+files]]
	</div>

	<div class="form-actions row">
		<div class="col-md-6">
			<input type="button" class="btn btn-default preview" value="[[%ticket_preview]]" title="Ctrl + Enter" />
		</div>
		<div class="col-md-6 move-right">
			[[!+published:is=`1`:then=`
			<a href="[[~[[+id]]?scheme=`full`]]" class="btn btn-default btn-xs" target="_blank">[[%ticket_open]]</a>
			<input type="button" class="btn btn-danger draft" name="draft" value="[[%ticket_draft]]" title="" />
			`:else=`
			<input type="button" class="btn btn-primary publish" name="publish" value="[[%ticket_publish]]" title="" />
			`]]
			<input type="submit" class="btn btn-default save" name="save" value="[[%ticket_save]]" title="Ctrl + Shift + Enter" />
		</div>
	</div>
</form>',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => 'core/components/tickets/elements/chunks/chunk.form_update.tpl',
      'content' => '<form class="well update" method="post" action="" id="ticketForm">
	<div id="ticket-preview-placeholder"></div>

	<input type="hidden" name="tid" value="[[+id]]" />

	<div class="form-group">
		<label for="ticket-sections">[[%tickets_section]]</label>
		<select name="parent" class="form-control" id="ticket-sections">[[+sections]]</select>
		<span class="error"></span>
	</div>

	<div class="form-group">
		<label for="ticket-pagetitle">[[%ticket_pagetitle]]</label>
		<input type="text" class="form-control" placeholder="[[%ticket_pagetitle]]" name="pagetitle" value="[[+pagetitle]]" maxlength="50" id="ticket-pagetitle"/>
		<span class="error"></span>
	</div>

	<div class="form-group">
		<textarea class="form-control" placeholder="[[%ticket_content]]" name="content" id="ticket-editor" rows="10">[[+content]]</textarea>
		<span class="error"></span>
	</div>

	<div class="ticket-form-files">
		[[+files]]
	</div>

	<div class="form-actions row">
		<div class="col-md-6">
			<input type="button" class="btn btn-default preview" value="[[%ticket_preview]]" title="Ctrl + Enter" />
		</div>
		<div class="col-md-6 move-right">
			[[!+published:is=`1`:then=`
			<a href="[[~[[+id]]?scheme=`full`]]" class="btn btn-default btn-xs" target="_blank">[[%ticket_open]]</a>
			<input type="button" class="btn btn-danger draft" name="draft" value="[[%ticket_draft]]" title="" />
			`:else=`
			<input type="button" class="btn btn-primary publish" name="publish" value="[[%ticket_publish]]" title="" />
			`]]
			<input type="submit" class="btn btn-default save" name="save" value="[[%ticket_save]]" title="Ctrl + Shift + Enter" />
		</div>
	</div>
</form>',
    ),
  ),
  'be77653b57f94d9777cdb519b6e437ba' => 
  array (
    'criteria' => 
    array (
      'name' => 'tpl.Tickets.form.preview',
    ),
    'object' => 
    array (
      'id' => 25,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'tpl.Tickets.form.preview',
      'description' => '',
      'editor_type' => 0,
      'category' => 12,
      'cache_type' => 0,
      'snippet' => '<h3 class="title">[[+pagetitle]]</h3>
<div class="content">[[+content]]</div>
<h5 class="author">[[+modx.user.id:userinfo=`username`]]</h5>
',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => 'core/components/tickets/elements/chunks/chunk.form_preview.tpl',
      'content' => '<h3 class="title">[[+pagetitle]]</h3>
<div class="content">[[+content]]</div>
<h5 class="author">[[+modx.user.id:userinfo=`username`]]</h5>
',
    ),
  ),
  'a4ba7064b60d4a40896731f10eb976d3' => 
  array (
    'criteria' => 
    array (
      'name' => 'tpl.Tickets.form.files',
    ),
    'object' => 
    array (
      'id' => 26,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'tpl.Tickets.form.files',
      'description' => '',
      'editor_type' => 0,
      'category' => 12,
      'cache_type' => 0,
      'snippet' => '<div id="ticket-files-list">
	[[+files]]
	<div class="clearfix"></div>
</div>

<div id="ticket-files-container" data-action="ticket/file/upload">
	<a id="ticket-files-select" href="javascript:;">[[%ticket_file_select]]</a>
	<div id="ticket-files-progress">
		<span id="ticket-files-progress-count">0/0</span>
		<span id="ticket-files-progress-percent">0%</span>
		<div id="ticket-files-progress-bar"></div>
	</div>
</div>',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => 'core/components/tickets/elements/chunks/chunk.form_files.tpl',
      'content' => '<div id="ticket-files-list">
	[[+files]]
	<div class="clearfix"></div>
</div>

<div id="ticket-files-container" data-action="ticket/file/upload">
	<a id="ticket-files-select" href="javascript:;">[[%ticket_file_select]]</a>
	<div id="ticket-files-progress">
		<span id="ticket-files-progress-count">0/0</span>
		<span id="ticket-files-progress-percent">0%</span>
		<div id="ticket-files-progress-bar"></div>
	</div>
</div>',
    ),
  ),
  '2dbb191739fdc63f7d338793ef254266' => 
  array (
    'criteria' => 
    array (
      'name' => 'tpl.Tickets.form.file',
    ),
    'object' => 
    array (
      'id' => 27,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'tpl.Tickets.form.file',
      'description' => '',
      'editor_type' => 0,
      'category' => 12,
      'cache_type' => 0,
      'snippet' => '<div class="ticket-file[[+deleted]][[+new]]" data-id="[[+id]]">
	<a href="[[+url]]" class="ticket-file-link" title="[[+file]]" target="_blank">
		<div class="ticket-file-image-wrapper">
			[[+file]]
		</div>
	</a>
	<div class="ticket-file-meta">
		<a href="#" class="ticket-file-delete">[[%ticket_file_delete]]</a>
		<a href="#" class="ticket-file-restore">[[%ticket_file_restore]]</a>
		<br/>
		<a href="#" class="ticket-file-insert">[[%ticket_file_insert]]</a>
		<br/>
		<span class="ticket-file-size">[[+size]] Kb</span>
	</div>
	<div class="ticket-file-template">
		<a href="[[+url]]">
			[[+name]]
		</a>
	</div>
</div>
<!--tickets_thumb <img src="[[+thumb]]" class="ticket-file-image" />-->
<!--tickets_deleted  deleted-->
<!--tickets_new  new-->',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => 'core/components/tickets/elements/chunks/chunk.form_file.tpl',
      'content' => '<div class="ticket-file[[+deleted]][[+new]]" data-id="[[+id]]">
	<a href="[[+url]]" class="ticket-file-link" title="[[+file]]" target="_blank">
		<div class="ticket-file-image-wrapper">
			[[+file]]
		</div>
	</a>
	<div class="ticket-file-meta">
		<a href="#" class="ticket-file-delete">[[%ticket_file_delete]]</a>
		<a href="#" class="ticket-file-restore">[[%ticket_file_restore]]</a>
		<br/>
		<a href="#" class="ticket-file-insert">[[%ticket_file_insert]]</a>
		<br/>
		<span class="ticket-file-size">[[+size]] Kb</span>
	</div>
	<div class="ticket-file-template">
		<a href="[[+url]]">
			[[+name]]
		</a>
	</div>
</div>
<!--tickets_thumb <img src="[[+thumb]]" class="ticket-file-image" />-->
<!--tickets_deleted  deleted-->
<!--tickets_new  new-->',
    ),
  ),
  'd30f55aa6a2c5d720ee21fdbceae068a' => 
  array (
    'criteria' => 
    array (
      'name' => 'tpl.Tickets.form.image',
    ),
    'object' => 
    array (
      'id' => 28,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'tpl.Tickets.form.image',
      'description' => '',
      'editor_type' => 0,
      'category' => 12,
      'cache_type' => 0,
      'snippet' => '<div class="ticket-file[[+deleted]][[+new]]" data-id="[[+id]]">
	<a href="[[+url]]" class="ticket-file-link" title="[[+file]]" target="_blank">
		<div class="ticket-file-image-wrapper">
			<img src="[[+thumb]]" class="ticket-file-image" />
		</div>
	</a>
	<div class="ticket-file-meta">
		<a href="#" class="ticket-file-delete">[[%ticket_file_delete]]</a>
		<a href="#" class="ticket-file-restore">[[%ticket_file_restore]]</a>
		<br/>
		<a href="#" class="ticket-file-insert">[[%ticket_file_insert]]</a>
		<br/>
		<span class="ticket-file-size">[[+size]] Kb</span>
	</div>
	<div class="ticket-file-template">
		<a href="[[+url]]" title="[[+name]]">
			<img src="[[+thumb]]" />
		</a>
	</div>
</div>
<!--tickets_deleted  deleted-->
<!--tickets_new  new-->',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => 'core/components/tickets/elements/chunks/chunk.form_image.tpl',
      'content' => '<div class="ticket-file[[+deleted]][[+new]]" data-id="[[+id]]">
	<a href="[[+url]]" class="ticket-file-link" title="[[+file]]" target="_blank">
		<div class="ticket-file-image-wrapper">
			<img src="[[+thumb]]" class="ticket-file-image" />
		</div>
	</a>
	<div class="ticket-file-meta">
		<a href="#" class="ticket-file-delete">[[%ticket_file_delete]]</a>
		<a href="#" class="ticket-file-restore">[[%ticket_file_restore]]</a>
		<br/>
		<a href="#" class="ticket-file-insert">[[%ticket_file_insert]]</a>
		<br/>
		<span class="ticket-file-size">[[+size]] Kb</span>
	</div>
	<div class="ticket-file-template">
		<a href="[[+url]]" title="[[+name]]">
			<img src="[[+thumb]]" />
		</a>
	</div>
</div>
<!--tickets_deleted  deleted-->
<!--tickets_new  new-->',
    ),
  ),
  'ba4392dcf70760e48fae7dd266247ef0' => 
  array (
    'criteria' => 
    array (
      'name' => 'tpl.Tickets.ticket.latest',
    ),
    'object' => 
    array (
      'id' => 29,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'tpl.Tickets.ticket.latest',
      'description' => '',
      'editor_type' => 0,
      'category' => 12,
      'cache_type' => 0,
      'snippet' => '<div class="tickets-latest-row">
	<span class="user"><i class="glyphicon glyphicon-user"></i> [[+fullname]]</span> <span class="date">[[+date_ago]]</span>
	<br/>
	<span class="section">
		<i class="glyphicon glyphicon-folder-open"></i> <a href="[[~[[+section.id]]]]">[[+section.pagetitle]]</a> <span class="arrow">&rarr;</span>
	</span>
	<span class="ticket">
		<a href="[[~[[+id]]]]">[[+pagetitle]]</a>
	</span>
	<nobr><i class="glyphicon glyphicon-comment"></i> <span class="comments">[[+comments]]</span></nobr>
</div>',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => 'core/components/tickets/elements/chunks/chunk.ticket_latest.tpl',
      'content' => '<div class="tickets-latest-row">
	<span class="user"><i class="glyphicon glyphicon-user"></i> [[+fullname]]</span> <span class="date">[[+date_ago]]</span>
	<br/>
	<span class="section">
		<i class="glyphicon glyphicon-folder-open"></i> <a href="[[~[[+section.id]]]]">[[+section.pagetitle]]</a> <span class="arrow">&rarr;</span>
	</span>
	<span class="ticket">
		<a href="[[~[[+id]]]]">[[+pagetitle]]</a>
	</span>
	<nobr><i class="glyphicon glyphicon-comment"></i> <span class="comments">[[+comments]]</span></nobr>
</div>',
    ),
  ),
  '82801e8eb16284c99f97d161de8b3613' => 
  array (
    'criteria' => 
    array (
      'name' => 'tpl.Tickets.ticket.email.bcc',
    ),
    'object' => 
    array (
      'id' => 30,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'tpl.Tickets.ticket.email.bcc',
      'description' => '',
      'editor_type' => 0,
      'category' => 12,
      'cache_type' => 0,
      'snippet' => '[[%ticket_email_bcc_intro?
    &fullname=`[[+user.fullname]]`
    &email=`[[+user.email]]`
    &id=`[[+id]]`
    &pagetitle=`[[+pagetitle]]`
]]

<pre style="background-color:#efefef;">[[+introtext]]</pre>
<br/><br/>

<a href="[[~[[+id]]?scheme=`full`]]">[[%ticket_email_view]]</a>',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => 'core/components/tickets/elements/chunks/chunk.ticket_email_bcc.tpl',
      'content' => '[[%ticket_email_bcc_intro?
    &fullname=`[[+user.fullname]]`
    &email=`[[+user.email]]`
    &id=`[[+id]]`
    &pagetitle=`[[+pagetitle]]`
]]

<pre style="background-color:#efefef;">[[+introtext]]</pre>
<br/><br/>

<a href="[[~[[+id]]?scheme=`full`]]">[[%ticket_email_view]]</a>',
    ),
  ),
  '1e3049f2e08452df2d14e892b383994c' => 
  array (
    'criteria' => 
    array (
      'name' => 'tpl.Tickets.ticket.email.subscription',
    ),
    'object' => 
    array (
      'id' => 31,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'tpl.Tickets.ticket.email.subscription',
      'description' => '',
      'editor_type' => 0,
      'category' => 12,
      'cache_type' => 0,
      'snippet' => '[[%ticket_email_subscribed_intro?
    &id=`[[+id]]`
    &fullname=`[[+user.fullname]]`
    &section=`[[+section.id]]`
    &section_title=`[[+section.pagetitle]]`
    &pagetitle=`[[+pagetitle]]`
]]

<pre style="background-color:#efefef;">[[+introtext]]</pre>
<br/><br/>

<a href="[[~[[+id]]?scheme=`full`]]">[[%ticket_email_view]]</a>',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => 'core/components/tickets/elements/chunks/chunk.ticket_email_subscription.tpl',
      'content' => '[[%ticket_email_subscribed_intro?
    &id=`[[+id]]`
    &fullname=`[[+user.fullname]]`
    &section=`[[+section.id]]`
    &section_title=`[[+section.pagetitle]]`
    &pagetitle=`[[+pagetitle]]`
]]

<pre style="background-color:#efefef;">[[+introtext]]</pre>
<br/><br/>

<a href="[[~[[+id]]?scheme=`full`]]">[[%ticket_email_view]]</a>',
    ),
  ),
  '6248a099e2fd29b68624c109c879e0a4' => 
  array (
    'criteria' => 
    array (
      'name' => 'tpl.Tickets.comment.form',
    ),
    'object' => 
    array (
      'id' => 32,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'tpl.Tickets.comment.form',
      'description' => '',
      'editor_type' => 0,
      'category' => 12,
      'cache_type' => 0,
      'snippet' => '<h4 id="comment-new-link">
	<a href="#" class="btn btn-default">[[%ticket_comment_create]]</a>
</h4>

<div id="comment-form-placeholder">
	<form id="comment-form" action="" method="post" class="well">
		<div id="comment-preview-placeholder"></div>
		<input type="hidden" name="thread" value="[[+thread]]" />
		<input type="hidden" name="parent" value="0" />
		<input type="hidden" name="id" value="0" />

		<div class="form-group">
			<label for="comment-editor"></label>
			<textarea name="text" id="comment-editor" cols="30" rows="10" class="form-control"></textarea>
		</div>

		<div class="form-actions">
			<input type="button" class="btn btn-default preview" value="[[%ticket_comment_preview]]" title="Ctrl + Enter" />
			<input type="submit" class="btn btn-primary submit" value="[[%ticket_comment_save]]" title="Ctrl + Shift + Enter" />
			<span class="time"></span>
		</div>
	</form>
</div>',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => 'core/components/tickets/elements/chunks/chunk.comment_form.tpl',
      'content' => '<h4 id="comment-new-link">
	<a href="#" class="btn btn-default">[[%ticket_comment_create]]</a>
</h4>

<div id="comment-form-placeholder">
	<form id="comment-form" action="" method="post" class="well">
		<div id="comment-preview-placeholder"></div>
		<input type="hidden" name="thread" value="[[+thread]]" />
		<input type="hidden" name="parent" value="0" />
		<input type="hidden" name="id" value="0" />

		<div class="form-group">
			<label for="comment-editor"></label>
			<textarea name="text" id="comment-editor" cols="30" rows="10" class="form-control"></textarea>
		</div>

		<div class="form-actions">
			<input type="button" class="btn btn-default preview" value="[[%ticket_comment_preview]]" title="Ctrl + Enter" />
			<input type="submit" class="btn btn-primary submit" value="[[%ticket_comment_save]]" title="Ctrl + Shift + Enter" />
			<span class="time"></span>
		</div>
	</form>
</div>',
    ),
  ),
  'ea299ba97f6bdafc8dfd41dba97cf048' => 
  array (
    'criteria' => 
    array (
      'name' => 'tpl.Tickets.comment.form.guest',
    ),
    'object' => 
    array (
      'id' => 33,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'tpl.Tickets.comment.form.guest',
      'description' => '',
      'editor_type' => 0,
      'category' => 12,
      'cache_type' => 0,
      'snippet' => '<h4 id="comment-new-link">
	<a href="#" class="btn btn-default">[[%ticket_comment_create]]</a>
</h4>

<div id="comment-form-placeholder">
	<form id="comment-form" action="" method="post" class="well">
		<div id="comment-preview-placeholder"></div>
		<input type="hidden" name="thread" value="[[+thread]]" />
		<input type="hidden" name="parent" value="0" />
		<input type="hidden" name="id" value="0" />

		<div class="form-group">
			<label for="comment-name">[[%ticket_comment_name]]</label>
			<input type="text" name="name" value="[[+name]]" id="comment-name" class="form-control" />
			<span class="error"></span>
		</div>

		<div class="form-group">
			<label for="comment-email">[[%ticket_comment_email]]</label>
			<input type="text" name="email" value="[[+email]]" id="comment-email" class="form-control" />
			<span class="error"></span>
		</div>

		<div class="form-group">
			<label for="comment-editor"></label>
			<textarea name="text" id="comment-editor" cols="30" rows="10" class="form-control"></textarea>
		</div>

		[[+captcha]]

		<div class="form-actions">
			<input type="button" class="btn btn-default preview" value="[[%ticket_comment_preview]]" title="Ctrl + Enter" />
			<input type="submit" class="btn btn-primary submit" value="[[%ticket_comment_save]]" title="Ctrl + Shift + Enter" />
			<span class="time"></span>
		</div>
	</form>
</div>

<!--tickets_captcha
<div class="form-group">
	<label for="comment-captcha" id="comment-captcha">[[+captcha]]</label>
	<input type="text" name="captcha" value="" id="comment-captcha" class="form-control" />
	<span class="error"></span>
</div>
-->',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => 'core/components/tickets/elements/chunks/chunk.comment_form_guest.tpl',
      'content' => '<h4 id="comment-new-link">
	<a href="#" class="btn btn-default">[[%ticket_comment_create]]</a>
</h4>

<div id="comment-form-placeholder">
	<form id="comment-form" action="" method="post" class="well">
		<div id="comment-preview-placeholder"></div>
		<input type="hidden" name="thread" value="[[+thread]]" />
		<input type="hidden" name="parent" value="0" />
		<input type="hidden" name="id" value="0" />

		<div class="form-group">
			<label for="comment-name">[[%ticket_comment_name]]</label>
			<input type="text" name="name" value="[[+name]]" id="comment-name" class="form-control" />
			<span class="error"></span>
		</div>

		<div class="form-group">
			<label for="comment-email">[[%ticket_comment_email]]</label>
			<input type="text" name="email" value="[[+email]]" id="comment-email" class="form-control" />
			<span class="error"></span>
		</div>

		<div class="form-group">
			<label for="comment-editor"></label>
			<textarea name="text" id="comment-editor" cols="30" rows="10" class="form-control"></textarea>
		</div>

		[[+captcha]]

		<div class="form-actions">
			<input type="button" class="btn btn-default preview" value="[[%ticket_comment_preview]]" title="Ctrl + Enter" />
			<input type="submit" class="btn btn-primary submit" value="[[%ticket_comment_save]]" title="Ctrl + Shift + Enter" />
			<span class="time"></span>
		</div>
	</form>
</div>

<!--tickets_captcha
<div class="form-group">
	<label for="comment-captcha" id="comment-captcha">[[+captcha]]</label>
	<input type="text" name="captcha" value="" id="comment-captcha" class="form-control" />
	<span class="error"></span>
</div>
-->',
    ),
  ),
  '6ea0f1a0e19931cdbc1bbe017bb2965c' => 
  array (
    'criteria' => 
    array (
      'name' => 'tpl.Tickets.comment.one.auth',
    ),
    'object' => 
    array (
      'id' => 34,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'tpl.Tickets.comment.one.auth',
      'description' => '',
      'editor_type' => 0,
      'category' => 12,
      'cache_type' => 0,
      'snippet' => '<li class="ticket-comment[[+comment_new]]" id="comment-[[+id]]" data-parent="[[+parent]]" data-newparent="[[+new_parent]]" data-id="[[+id]]">
	<div class="ticket-comment-body[[+guest]][[+bad]]">
		<div class="ticket-comment-header">
			<div class="ticket-comment-dot-wrapper"><div class="ticket-comment-dot"></div></div>
			<img src="[[+avatar]]" class="ticket-avatar" alt="" />
			<span class="ticket-comment-author">[[+fullname]]</span>
			<span class="ticket-comment-createdon">[[+date_ago]]</span>[[+comment_was_edited]]
			<span class="ticket-comment-link"><a href="[[+url]]#comment-[[+id]]">#</a></span>
			<span class="ticket-comment-star[[+can_star]]">[[+stared]][[+unstared]]</span>
			[[+has_parent]]
			<span class="ticket-comment-down"><a href="#" data-child="">&darr;</a></span>
			<span class="ticket-comment-rating[[+can_vote]][[+cant_vote]]">
				<span class="rating[[+rating_positive]][[+rating_negative]]" title="[[%ticket_rating_total]] [[+rating_total]]: ↑[[+rating_plus]] [[%ticket_rating_and]] ↓[[+rating_minus]]">[[+rating]]</span>
				<span class="vote plus[[+voted_plus]]" title="[[%ticket_like]]"><i class="glyphicon glyphicon-arrow-up"></i></span>
				<span class="vote minus[[+voted_minus]]" title="[[%ticket_dislike]]"><i class="glyphicon glyphicon-arrow-down"></i></span>
			</span>
		</div>
		<div class="ticket-comment-text">
			[[+text]]
		</div>
	</div>
	<div class="comment-reply">
		<a href="#" class="reply">[[%ticket_comment_reply]]</a>
		[[+comment_edit_link]]
	</div>
	<ol class="comments-list">[[+children]]</ol>
</li>
<!--tickets_comment_edit_link <a href="#" class="edit">[[%ticket_comment_edit]]</a>-->
<!--tickets_comment_was_edited <span class="ticket-comment-edited">([[%ticket_comment_was_edited]])</span>-->
<!--tickets_comment_new  ticket-comment-new-->
<!--tickets_can_vote  active-->
<!--tickets_cant_vote  inactive-->
<!--tickets_rating_positive  positive-->
<!--tickets_rating_negative  negative-->
<!--tickets_voted_plus  voted-->
<!--tickets_voted_minus  voted-->
<!--tickets_guest  ticket-comment-guest-->
<!--tickets_has_parent <span class="ticket-comment-up"><a href="[[+url]]#comment-[[+parent]]" data-id="[[+id]]" data-parent="[[+parent]]">&uarr;</a></span>-->
<!--tickets_can_star  active-->
<!--tickets_stared <i class="glyphicon glyphicon-star stared star"></i>-->
<!--tickets_unstared <i class="glyphicon glyphicon-star unstared star"></i>-->
',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => 'core/components/tickets/elements/chunks/chunk.comment_one_auth.tpl',
      'content' => '<li class="ticket-comment[[+comment_new]]" id="comment-[[+id]]" data-parent="[[+parent]]" data-newparent="[[+new_parent]]" data-id="[[+id]]">
	<div class="ticket-comment-body[[+guest]][[+bad]]">
		<div class="ticket-comment-header">
			<div class="ticket-comment-dot-wrapper"><div class="ticket-comment-dot"></div></div>
			<img src="[[+avatar]]" class="ticket-avatar" alt="" />
			<span class="ticket-comment-author">[[+fullname]]</span>
			<span class="ticket-comment-createdon">[[+date_ago]]</span>[[+comment_was_edited]]
			<span class="ticket-comment-link"><a href="[[+url]]#comment-[[+id]]">#</a></span>
			<span class="ticket-comment-star[[+can_star]]">[[+stared]][[+unstared]]</span>
			[[+has_parent]]
			<span class="ticket-comment-down"><a href="#" data-child="">&darr;</a></span>
			<span class="ticket-comment-rating[[+can_vote]][[+cant_vote]]">
				<span class="rating[[+rating_positive]][[+rating_negative]]" title="[[%ticket_rating_total]] [[+rating_total]]: ↑[[+rating_plus]] [[%ticket_rating_and]] ↓[[+rating_minus]]">[[+rating]]</span>
				<span class="vote plus[[+voted_plus]]" title="[[%ticket_like]]"><i class="glyphicon glyphicon-arrow-up"></i></span>
				<span class="vote minus[[+voted_minus]]" title="[[%ticket_dislike]]"><i class="glyphicon glyphicon-arrow-down"></i></span>
			</span>
		</div>
		<div class="ticket-comment-text">
			[[+text]]
		</div>
	</div>
	<div class="comment-reply">
		<a href="#" class="reply">[[%ticket_comment_reply]]</a>
		[[+comment_edit_link]]
	</div>
	<ol class="comments-list">[[+children]]</ol>
</li>
<!--tickets_comment_edit_link <a href="#" class="edit">[[%ticket_comment_edit]]</a>-->
<!--tickets_comment_was_edited <span class="ticket-comment-edited">([[%ticket_comment_was_edited]])</span>-->
<!--tickets_comment_new  ticket-comment-new-->
<!--tickets_can_vote  active-->
<!--tickets_cant_vote  inactive-->
<!--tickets_rating_positive  positive-->
<!--tickets_rating_negative  negative-->
<!--tickets_voted_plus  voted-->
<!--tickets_voted_minus  voted-->
<!--tickets_guest  ticket-comment-guest-->
<!--tickets_has_parent <span class="ticket-comment-up"><a href="[[+url]]#comment-[[+parent]]" data-id="[[+id]]" data-parent="[[+parent]]">&uarr;</a></span>-->
<!--tickets_can_star  active-->
<!--tickets_stared <i class="glyphicon glyphicon-star stared star"></i>-->
<!--tickets_unstared <i class="glyphicon glyphicon-star unstared star"></i>-->
',
    ),
  ),
  'c3895d932aea6284a87ea00c7ce46faa' => 
  array (
    'criteria' => 
    array (
      'name' => 'tpl.Tickets.comment.one.guest',
    ),
    'object' => 
    array (
      'id' => 35,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'tpl.Tickets.comment.one.guest',
      'description' => '',
      'editor_type' => 0,
      'category' => 12,
      'cache_type' => 0,
      'snippet' => '<li class="ticket-comment" id="comment-[[+id]]">
	<div class="ticket-comment-body[[+bad]]">
		<div class="ticket-comment-header">
			<div class="ticket-comment-dot-wrapper"><div class="ticket-comment-dot"></div></div>
			<img src="[[+avatar]]" class="ticket-avatar" alt="" />
			<span class="ticket-comment-author">[[+fullname]]</span>
			<span class="ticket-comment-createdon">[[+date_ago]]</span>
			<span class="ticket-comment-link"><a href="[[+url]]#comment-[[+id]]">#</a></span>

			[[+has_parent]]
			<span class="ticket-comment-down"><a href="#" data-child="">&darr;</a></span>

			<span class="ticket-comment-rating inactive">
				<span class="rating[[+rating_positive]][[+rating_negative]]">
					[[+rating]]
				</span>
				<span class="plus" title="[[%ticket_like]]">
					<i class="glyphicon glyphicon-arrow-up"></i>
				</span>
				<span class="minus" title="[[%ticket_dislike]]">
					<i class="glyphicon glyphicon-arrow-down"></i>
				</span>
			</span>
		</div>
		<div class="ticket-comment-text">
			[[+text]]
		</div>
	</div>
	<ol class="comments-list">[[+children]]</ol>
</li>
<!--tickets_rating_positive  positive-->
<!--tickets_rating_negative  negative-->
<!--tickets_has_parent <span class="ticket-comment-up"><a href="[[+url]]#comment-[[+parent]]" data-id="[[+id]]" data-parent="[[+parent]]">&uarr;</a></span>-->',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => 'core/components/tickets/elements/chunks/chunk.comment_one_guest.tpl',
      'content' => '<li class="ticket-comment" id="comment-[[+id]]">
	<div class="ticket-comment-body[[+bad]]">
		<div class="ticket-comment-header">
			<div class="ticket-comment-dot-wrapper"><div class="ticket-comment-dot"></div></div>
			<img src="[[+avatar]]" class="ticket-avatar" alt="" />
			<span class="ticket-comment-author">[[+fullname]]</span>
			<span class="ticket-comment-createdon">[[+date_ago]]</span>
			<span class="ticket-comment-link"><a href="[[+url]]#comment-[[+id]]">#</a></span>

			[[+has_parent]]
			<span class="ticket-comment-down"><a href="#" data-child="">&darr;</a></span>

			<span class="ticket-comment-rating inactive">
				<span class="rating[[+rating_positive]][[+rating_negative]]">
					[[+rating]]
				</span>
				<span class="plus" title="[[%ticket_like]]">
					<i class="glyphicon glyphicon-arrow-up"></i>
				</span>
				<span class="minus" title="[[%ticket_dislike]]">
					<i class="glyphicon glyphicon-arrow-down"></i>
				</span>
			</span>
		</div>
		<div class="ticket-comment-text">
			[[+text]]
		</div>
	</div>
	<ol class="comments-list">[[+children]]</ol>
</li>
<!--tickets_rating_positive  positive-->
<!--tickets_rating_negative  negative-->
<!--tickets_has_parent <span class="ticket-comment-up"><a href="[[+url]]#comment-[[+parent]]" data-id="[[+id]]" data-parent="[[+parent]]">&uarr;</a></span>-->',
    ),
  ),
  'aed0131c5baa9b41da2905e5d24f4c10' => 
  array (
    'criteria' => 
    array (
      'name' => 'tpl.Tickets.comment.one.deleted',
    ),
    'object' => 
    array (
      'id' => 36,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'tpl.Tickets.comment.one.deleted',
      'description' => '',
      'editor_type' => 0,
      'category' => 12,
      'cache_type' => 0,
      'snippet' => '<li class="ticket-comment" id="comment-[[+id]]">
	<div class="ticket-comment-body alert alert-warning">
		[[%ticket_comment_deleted_text]]
	</div>
	<ol class="comments-list">[[+children]]</ol>
</li>
',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => 'core/components/tickets/elements/chunks/chunk.comment_one_deleted.tpl',
      'content' => '<li class="ticket-comment" id="comment-[[+id]]">
	<div class="ticket-comment-body alert alert-warning">
		[[%ticket_comment_deleted_text]]
	</div>
	<ol class="comments-list">[[+children]]</ol>
</li>
',
    ),
  ),
  '8f1c6cca7f44fd2d437e28da8dbe1b3b' => 
  array (
    'criteria' => 
    array (
      'name' => 'tpl.Tickets.comment.wrapper',
    ),
    'object' => 
    array (
      'id' => 37,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'tpl.Tickets.comment.wrapper',
      'description' => '',
      'editor_type' => 0,
      'category' => 12,
      'cache_type' => 0,
      'snippet' => '<div class="comments">
	[[+modx.user.id:isloggedin:is=`1`:then=`
	<span class="comments-subscribe pull-right">
		<label for="comments-subscribe" class="checkbox">
			<input type="checkbox" name="" id="comments-subscribe" value="1" [[+subscribed]] /> [[%ticket_comment_notify]]
		</label>
	</span>
	`:else=``]]

	<h3 class="title">[[%comments]] (<span id="comment-total">[[+total]]</span>)</h3>

	<div id="comments-wrapper">
		<ol class="comment-list" id="comments">[[+comments]]</ol>
	</div>

	<div id="comments-tpanel">
		<div id="tpanel-refresh"></div>
		<div id="tpanel-new"></div>
	</div>
</div>

<!--tickets_subscribed checked-->
',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => 'core/components/tickets/elements/chunks/chunk.comment_wrapper.tpl',
      'content' => '<div class="comments">
	[[+modx.user.id:isloggedin:is=`1`:then=`
	<span class="comments-subscribe pull-right">
		<label for="comments-subscribe" class="checkbox">
			<input type="checkbox" name="" id="comments-subscribe" value="1" [[+subscribed]] /> [[%ticket_comment_notify]]
		</label>
	</span>
	`:else=``]]

	<h3 class="title">[[%comments]] (<span id="comment-total">[[+total]]</span>)</h3>

	<div id="comments-wrapper">
		<ol class="comment-list" id="comments">[[+comments]]</ol>
	</div>

	<div id="comments-tpanel">
		<div id="tpanel-refresh"></div>
		<div id="tpanel-new"></div>
	</div>
</div>

<!--tickets_subscribed checked-->
',
    ),
  ),
  '31f89aeb51e8c73af882bc371ca9ec0e' => 
  array (
    'criteria' => 
    array (
      'name' => 'tpl.Tickets.comment.login',
    ),
    'object' => 
    array (
      'id' => 38,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'tpl.Tickets.comment.login',
      'description' => '',
      'editor_type' => 0,
      'category' => 12,
      'cache_type' => 0,
      'snippet' => '<div class="ticket-comments alert alert-warning">
    <p>[[%ticket_comment_err_no_auth]]</p>
</div>',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => 'core/components/tickets/elements/chunks/chunk.comment_login.tpl',
      'content' => '<div class="ticket-comments alert alert-warning">
    <p>[[%ticket_comment_err_no_auth]]</p>
</div>',
    ),
  ),
  '756294824c503322ad720ecaab4d2ee6' => 
  array (
    'criteria' => 
    array (
      'name' => 'tpl.Tickets.comment.latest',
    ),
    'object' => 
    array (
      'id' => 39,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'tpl.Tickets.comment.latest',
      'description' => '',
      'editor_type' => 0,
      'category' => 12,
      'cache_type' => 0,
      'snippet' => '<div class="tickets-latest-row[[+guest]]">
	<span class="user"><i class="glyphicon glyphicon-user"></i> [[+fullname]]</span> <span class="date">[[+date_ago]]</span>
	<br/>
	<span class="ticket">
		<a href="[[~[[+ticket.id]]]]#comment-[[+id]]">[[+ticket.pagetitle]]</a>
	</span>
	<nobr><i class="glyphicon glyphicon-comment"></i> <span class="comments">[[+comments]]</span></nobr>
</div>
<!--tickets_guest  ticket-comment-guest-->',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => 'core/components/tickets/elements/chunks/chunk.comment_latest.tpl',
      'content' => '<div class="tickets-latest-row[[+guest]]">
	<span class="user"><i class="glyphicon glyphicon-user"></i> [[+fullname]]</span> <span class="date">[[+date_ago]]</span>
	<br/>
	<span class="ticket">
		<a href="[[~[[+ticket.id]]]]#comment-[[+id]]">[[+ticket.pagetitle]]</a>
	</span>
	<nobr><i class="glyphicon glyphicon-comment"></i> <span class="comments">[[+comments]]</span></nobr>
</div>
<!--tickets_guest  ticket-comment-guest-->',
    ),
  ),
  '440cc68b0864cd06759063b85d17e8f1' => 
  array (
    'criteria' => 
    array (
      'name' => 'tpl.Tickets.comment.email.owner',
    ),
    'object' => 
    array (
      'id' => 40,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'tpl.Tickets.comment.email.owner',
      'description' => '',
      'editor_type' => 0,
      'category' => 12,
      'cache_type' => 0,
      'snippet' => '[[%ticket_comment_email_owner_intro?
    &name=`[[+name]]`
    &resource=`[[+resource]]`
    &pagetitle=`[[+pagetitle]]`
]]

<pre>[[+text]]</pre>
<br/><br/>

<a href="[[~[[+resource]]?scheme=`full`]]#comment-[[+id]]">[[%ticket_email_reply]]</a>',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => 'core/components/tickets/elements/chunks/chunk.comment_email_owner.tpl',
      'content' => '[[%ticket_comment_email_owner_intro?
    &name=`[[+name]]`
    &resource=`[[+resource]]`
    &pagetitle=`[[+pagetitle]]`
]]

<pre>[[+text]]</pre>
<br/><br/>

<a href="[[~[[+resource]]?scheme=`full`]]#comment-[[+id]]">[[%ticket_email_reply]]</a>',
    ),
  ),
  '894125a581726b3c4232d13d5304177e' => 
  array (
    'criteria' => 
    array (
      'name' => 'tpl.Tickets.comment.email.reply',
    ),
    'object' => 
    array (
      'id' => 41,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'tpl.Tickets.comment.email.reply',
      'description' => '',
      'editor_type' => 0,
      'category' => 12,
      'cache_type' => 0,
      'snippet' => '[[%ticket_comment_email_reply_intro?
    &name=`[[+name]]`
    &resource=`[[+resource]]`
    &pagetitle=`[[+pagetitle]]`
]]

<pre>[[+text]]</pre>
<br/><br/>
<a href="[[~[[+resource]]?scheme=`full`]]#comment-[[+id]]">[[%ticket_email_reply]]</a>
<br/><br/>

[[%ticket_comment_email_reply_text]]
<pre>[[+parent_text]]</pre>',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => 'core/components/tickets/elements/chunks/chunk.comment_email_reply.tpl',
      'content' => '[[%ticket_comment_email_reply_intro?
    &name=`[[+name]]`
    &resource=`[[+resource]]`
    &pagetitle=`[[+pagetitle]]`
]]

<pre>[[+text]]</pre>
<br/><br/>
<a href="[[~[[+resource]]?scheme=`full`]]#comment-[[+id]]">[[%ticket_email_reply]]</a>
<br/><br/>

[[%ticket_comment_email_reply_text]]
<pre>[[+parent_text]]</pre>',
    ),
  ),
  '7bd0baf1760b6ae334f95e9602b23323' => 
  array (
    'criteria' => 
    array (
      'name' => 'tpl.Tickets.comment.email.subscription',
    ),
    'object' => 
    array (
      'id' => 42,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'tpl.Tickets.comment.email.subscription',
      'description' => '',
      'editor_type' => 0,
      'category' => 12,
      'cache_type' => 0,
      'snippet' => '[[%ticket_comment_email_subscription_intro?
    &name=`[[+name]]`
    &resource=`[[+resource]]`
    &pagetitle=`[[+pagetitle]]`
]]

<pre>[[+text]]</pre>
<br/><br/>

<a href="[[~[[+resource]]?scheme=`full`]]#comment-[[+id]]">[[%ticket_email_view]]</a>',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => 'core/components/tickets/elements/chunks/chunk.comment_email_subscription.tpl',
      'content' => '[[%ticket_comment_email_subscription_intro?
    &name=`[[+name]]`
    &resource=`[[+resource]]`
    &pagetitle=`[[+pagetitle]]`
]]

<pre>[[+text]]</pre>
<br/><br/>

<a href="[[~[[+resource]]?scheme=`full`]]#comment-[[+id]]">[[%ticket_email_view]]</a>',
    ),
  ),
  '42fad4eaa2a04878a8ca239905cd0a4f' => 
  array (
    'criteria' => 
    array (
      'name' => 'tpl.Tickets.comment.email.bcc',
    ),
    'object' => 
    array (
      'id' => 43,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'tpl.Tickets.comment.email.bcc',
      'description' => '',
      'editor_type' => 0,
      'category' => 12,
      'cache_type' => 0,
      'snippet' => '[[%ticket_comment_email_bcc_intro?
    &name=`[[+name]]`
    &resource=`[[+resource]]`
    &pagetitle=`[[+pagetitle]]`
]]

<pre>[[+text]]</pre>
<br/><br/>

<a href="[[~[[+resource]]?scheme=`full`]]#comment-[[+id]]">[[%ticket_email_view]]</a>
',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => 'core/components/tickets/elements/chunks/chunk.comment_email_bcc.tpl',
      'content' => '[[%ticket_comment_email_bcc_intro?
    &name=`[[+name]]`
    &resource=`[[+resource]]`
    &pagetitle=`[[+pagetitle]]`
]]

<pre>[[+text]]</pre>
<br/><br/>

<a href="[[~[[+resource]]?scheme=`full`]]#comment-[[+id]]">[[%ticket_email_view]]</a>
',
    ),
  ),
  '2920eb5aca2bff16b06da1989ba51092' => 
  array (
    'criteria' => 
    array (
      'name' => 'tpl.Tickets.comment.email.unpublished',
    ),
    'object' => 
    array (
      'id' => 44,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'tpl.Tickets.comment.email.unpublished',
      'description' => '',
      'editor_type' => 0,
      'category' => 12,
      'cache_type' => 0,
      'snippet' => '[[%ticket_comment_email_unpublished_intro?
    &name=`[[+name]]`
    &resource=`[[+resource]]`
    &pagetitle=`[[+pagetitle]]`
]]

<pre>[[+text]]</pre>
<br/><br/>

<a href="[[+manager_url]]">[[%ticket_email_all_comments]]</a>',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => 'core/components/tickets/elements/chunks/chunk.comment_email_unpublished.tpl',
      'content' => '[[%ticket_comment_email_unpublished_intro?
    &name=`[[+name]]`
    &resource=`[[+resource]]`
    &pagetitle=`[[+pagetitle]]`
]]

<pre>[[+text]]</pre>
<br/><br/>

<a href="[[+manager_url]]">[[%ticket_email_all_comments]]</a>',
    ),
  ),
  '7727b230afd8c024755403c33713b68d' => 
  array (
    'criteria' => 
    array (
      'name' => 'tpl.Tickets.comment.list.row',
    ),
    'object' => 
    array (
      'id' => 45,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'tpl.Tickets.comment.list.row',
      'description' => '',
      'editor_type' => 0,
      'category' => 12,
      'cache_type' => 0,
      'snippet' => '<div class="ticket-comment-row ticket-comment" id="comment-[[+id]]" data-id="[[+id]]">
	<div class="ticket-comment-body[[+guest]]">
		<div class="ticket-comment-header">
			<img src="[[+avatar]]" class="ticket-avatar" alt="" />
			<span class="ticket-comment-author">[[+fullname]]</span>
			<span class="ticket-comment-createdon">[[+date_ago]]</span>[[+comment_was_edited]]
			<span class="ticket-comment-link"><a href="[[+url]]#comment-[[+id]]">#</a></span>
			<span class="ticket-comment-star[[+can_star]]">[[+stared]][[+unstared]]</span>

			<span class="ticket-comment-rating[[+can_vote]][[+cant_vote]]">
				<span class="rating[[+rating_positive]][[+rating_negative]]" title="[[%ticket_rating_total]] [[+rating_total]]: ↑[[+rating_plus]] [[%ticket_rating_and]] ↓[[+rating_minus]]">[[+rating]]</span>
				<span class="vote plus[[+voted_plus]]" title="[[%ticket_like]]"><i class="glyphicon glyphicon-arrow-up"></i></span>
				<span class="vote minus[[+voted_minus]]" title="[[%ticket_dislike]]"><i class="glyphicon glyphicon-arrow-down"></i></span>
			</span>
		</div>
		<div class="ticket-comment-text">
			[[+text]]
		</div>
	</div>

	<a href="[[~[[+section.id]]]]" class="ticket-comment-section"><i class="glyphicon glyphicon-folder-open"></i> [[+section.pagetitle]]</a> &rarr;
	<a href="[[~[[+ticket.id]]]]" class="ticket-comment-ticket">[[+ticket.pagetitle]]</a> &nbsp;
	<span class="ticket-comment-comments"><i class="glyphicon glyphicon-comment"></i> [[+comments]]</span>
</div>
<!--tickets_comment_was_edited <span class="ticket-comment-edited">([[%ticket_comment_was_edited]])</span>-->
<!--tickets_can_vote  active-->
<!--tickets_cant_vote  inactive-->
<!--tickets_rating_positive  positive-->
<!--tickets_rating_negative  negative-->
<!--tickets_voted_plus  voted-->
<!--tickets_voted_minus  voted-->
<!--tickets_guest  ticket-comment-guest-->
<!--tickets_can_star  active-->
<!--tickets_stared <i class="glyphicon glyphicon-star stared star"></i>-->
<!--tickets_unstared <i class="glyphicon glyphicon-star unstared star"></i>-->',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => 'core/components/tickets/elements/chunks/chunk.comment_list_row.tpl',
      'content' => '<div class="ticket-comment-row ticket-comment" id="comment-[[+id]]" data-id="[[+id]]">
	<div class="ticket-comment-body[[+guest]]">
		<div class="ticket-comment-header">
			<img src="[[+avatar]]" class="ticket-avatar" alt="" />
			<span class="ticket-comment-author">[[+fullname]]</span>
			<span class="ticket-comment-createdon">[[+date_ago]]</span>[[+comment_was_edited]]
			<span class="ticket-comment-link"><a href="[[+url]]#comment-[[+id]]">#</a></span>
			<span class="ticket-comment-star[[+can_star]]">[[+stared]][[+unstared]]</span>

			<span class="ticket-comment-rating[[+can_vote]][[+cant_vote]]">
				<span class="rating[[+rating_positive]][[+rating_negative]]" title="[[%ticket_rating_total]] [[+rating_total]]: ↑[[+rating_plus]] [[%ticket_rating_and]] ↓[[+rating_minus]]">[[+rating]]</span>
				<span class="vote plus[[+voted_plus]]" title="[[%ticket_like]]"><i class="glyphicon glyphicon-arrow-up"></i></span>
				<span class="vote minus[[+voted_minus]]" title="[[%ticket_dislike]]"><i class="glyphicon glyphicon-arrow-down"></i></span>
			</span>
		</div>
		<div class="ticket-comment-text">
			[[+text]]
		</div>
	</div>

	<a href="[[~[[+section.id]]]]" class="ticket-comment-section"><i class="glyphicon glyphicon-folder-open"></i> [[+section.pagetitle]]</a> &rarr;
	<a href="[[~[[+ticket.id]]]]" class="ticket-comment-ticket">[[+ticket.pagetitle]]</a> &nbsp;
	<span class="ticket-comment-comments"><i class="glyphicon glyphicon-comment"></i> [[+comments]]</span>
</div>
<!--tickets_comment_was_edited <span class="ticket-comment-edited">([[%ticket_comment_was_edited]])</span>-->
<!--tickets_can_vote  active-->
<!--tickets_cant_vote  inactive-->
<!--tickets_rating_positive  positive-->
<!--tickets_rating_negative  negative-->
<!--tickets_voted_plus  voted-->
<!--tickets_voted_minus  voted-->
<!--tickets_guest  ticket-comment-guest-->
<!--tickets_can_star  active-->
<!--tickets_stared <i class="glyphicon glyphicon-star stared star"></i>-->
<!--tickets_unstared <i class="glyphicon glyphicon-star unstared star"></i>-->',
    ),
  ),
  'd6bd6b19d413e9201db3a952e85ba706' => 
  array (
    'criteria' => 
    array (
      'name' => 'tpl.Tickets.list.row',
    ),
    'object' => 
    array (
      'id' => 46,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'tpl.Tickets.list.row',
      'description' => '',
      'editor_type' => 0,
      'category' => 12,
      'cache_type' => 0,
      'snippet' => '<div class="tickets-row">
    <h3 class="title"><a href="[[~[[+id]]]]">[[+pagetitle]]</a></h3>
	<div class="content">
		[[+introtext]]<br/>
		<a href="[[~[[+id]]]]#cut" class="btn btn-default ticket-read-more">[[%ticket_read_more]]</a>
	</div>
	<div class="ticket-meta row" data-id="[[+id]]">
		<span class="col-md-5">
			<i class="glyphicon glyphicon-calendar"></i> [[+date_ago]]
			&nbsp;&nbsp;
			<i class="glyphicon glyphicon-user"></i> [[+fullname]]
		</span>
		<span class="col-md-2"><a href="[[~[[+section.id]]]]"><i class="glyphicon glyphicon-folder-open"></i> [[+section.pagetitle]]</a></span>
		<span class="col-md-3">
			<span class="ticket-star[[+can_star]]">[[+stared]][[+unstared]] <span class="ticket-star-count">[[+stars]]</span></span>
			&nbsp;&nbsp;
			<i class="glyphicon glyphicon-eye-open"></i> [[+views]]
			&nbsp;&nbsp;
			<i class="glyphicon glyphicon-comment"></i> [[+comments]]  [[+new_comments]]
		</span>
		<span class="col-md-2 pull-right ticket-rating[[+active]][[+inactive]]">
			<span class="vote plus[[+voted_plus]]" title="[[%ticket_like]]"><i class="glyphicon glyphicon-arrow-up"></i></span>
			[[+can_vote]][[+cant_vote]]
			<span class="vote minus[[+voted_minus]]" title="[[%ticket_dislike]]"><i class="glyphicon glyphicon-arrow-down"></i></span>
		</span>
	</div>
</div>
<!--tickets_can_vote <span class="vote rating" title="[[%ticket_refrain]]"><i class="glyphicon glyphicon-minus"></i></span>-->
<!--tickets_cant_vote <span class="rating[[+rating_positive]][[+rating_negative]]" title="[[%ticket_rating_total]] [[+rating_total]]: ↑[[+rating_plus]] [[%ticket_rating_and]] ↓[[+rating_minus]]">[[+rating]]</span>-->
<!--tickets_new_comments <span class="ticket-new-comments">+[[+new_comments]]</span>-->
<!--tickets_active  active-->
<!--tickets_inactive  inactive-->
<!--tickets_voted_plus  voted-->
<!--tickets_voted_minus  voted-->
<!--tickets_rating_positive  positive-->
<!--tickets_rating_negative  negative-->
<!--tickets_can_star  active-->
<!--tickets_stared <i class="glyphicon glyphicon-star stared star"></i>-->
<!--tickets_unstared <i class="glyphicon glyphicon-star unstared star"></i>-->',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => 'core/components/tickets/elements/chunks/chunk.ticket_list_row.tpl',
      'content' => '<div class="tickets-row">
    <h3 class="title"><a href="[[~[[+id]]]]">[[+pagetitle]]</a></h3>
	<div class="content">
		[[+introtext]]<br/>
		<a href="[[~[[+id]]]]#cut" class="btn btn-default ticket-read-more">[[%ticket_read_more]]</a>
	</div>
	<div class="ticket-meta row" data-id="[[+id]]">
		<span class="col-md-5">
			<i class="glyphicon glyphicon-calendar"></i> [[+date_ago]]
			&nbsp;&nbsp;
			<i class="glyphicon glyphicon-user"></i> [[+fullname]]
		</span>
		<span class="col-md-2"><a href="[[~[[+section.id]]]]"><i class="glyphicon glyphicon-folder-open"></i> [[+section.pagetitle]]</a></span>
		<span class="col-md-3">
			<span class="ticket-star[[+can_star]]">[[+stared]][[+unstared]] <span class="ticket-star-count">[[+stars]]</span></span>
			&nbsp;&nbsp;
			<i class="glyphicon glyphicon-eye-open"></i> [[+views]]
			&nbsp;&nbsp;
			<i class="glyphicon glyphicon-comment"></i> [[+comments]]  [[+new_comments]]
		</span>
		<span class="col-md-2 pull-right ticket-rating[[+active]][[+inactive]]">
			<span class="vote plus[[+voted_plus]]" title="[[%ticket_like]]"><i class="glyphicon glyphicon-arrow-up"></i></span>
			[[+can_vote]][[+cant_vote]]
			<span class="vote minus[[+voted_minus]]" title="[[%ticket_dislike]]"><i class="glyphicon glyphicon-arrow-down"></i></span>
		</span>
	</div>
</div>
<!--tickets_can_vote <span class="vote rating" title="[[%ticket_refrain]]"><i class="glyphicon glyphicon-minus"></i></span>-->
<!--tickets_cant_vote <span class="rating[[+rating_positive]][[+rating_negative]]" title="[[%ticket_rating_total]] [[+rating_total]]: ↑[[+rating_plus]] [[%ticket_rating_and]] ↓[[+rating_minus]]">[[+rating]]</span>-->
<!--tickets_new_comments <span class="ticket-new-comments">+[[+new_comments]]</span>-->
<!--tickets_active  active-->
<!--tickets_inactive  inactive-->
<!--tickets_voted_plus  voted-->
<!--tickets_voted_minus  voted-->
<!--tickets_rating_positive  positive-->
<!--tickets_rating_negative  negative-->
<!--tickets_can_star  active-->
<!--tickets_stared <i class="glyphicon glyphicon-star stared star"></i>-->
<!--tickets_unstared <i class="glyphicon glyphicon-star unstared star"></i>-->',
    ),
  ),
  '4351f1ae0fc23a0718cd6c28af2553b9' => 
  array (
    'criteria' => 
    array (
      'name' => 'tpl.Tickets.sections.row',
    ),
    'object' => 
    array (
      'id' => 47,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'tpl.Tickets.sections.row',
      'description' => '',
      'editor_type' => 0,
      'category' => 12,
      'cache_type' => 0,
      'snippet' => '<div class="section-row">
	<h3 class="title"><a href="[[~[[+id]]]]">[[+pagetitle]]</a></h3>
	<div class="content">
		[[+introtext]]
	</div>
	<div class="section-meta row">
		<div class="col-md-1"><i class="glyphicon glyphicon-th-list"></i> [[+tickets]]</div>
		<div class="col-md-1"><i class="glyphicon glyphicon-eye-open"></i> [[+views]]</div>
		<div class="col-md-1"><i class="glyphicon glyphicon-comment"></i> [[+comments]]</div>
	</div>
</div>',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => 'core/components/tickets/elements/chunks/chunk.ticket_sections_row.tpl',
      'content' => '<div class="section-row">
	<h3 class="title"><a href="[[~[[+id]]]]">[[+pagetitle]]</a></h3>
	<div class="content">
		[[+introtext]]
	</div>
	<div class="section-meta row">
		<div class="col-md-1"><i class="glyphicon glyphicon-th-list"></i> [[+tickets]]</div>
		<div class="col-md-1"><i class="glyphicon glyphicon-eye-open"></i> [[+views]]</div>
		<div class="col-md-1"><i class="glyphicon glyphicon-comment"></i> [[+comments]]</div>
	</div>
</div>',
    ),
  ),
  '566e19e5d28fd6eb356f0f00d495b696' => 
  array (
    'criteria' => 
    array (
      'name' => 'tpl.Tickets.sections.wrapper',
    ),
    'object' => 
    array (
      'id' => 48,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'tpl.Tickets.sections.wrapper',
      'description' => '',
      'editor_type' => 0,
      'category' => 12,
      'cache_type' => 0,
      'snippet' => '[[+modx.user.id:isloggedin:is=`1`:then=`
<span class="tickets-subscribe pull-right">
	<label for="tickets-subscribe" class="checkbox">
		<input type="checkbox" name="" id="tickets-subscribe" value="1" data-id="[[*id]]" [[+subscribed:notempty=`checked`]] /> [[%tickets_section_notify]]
	</label>
</span>
`:else=``]]

<div class="tickets-list">
	[[+output]]
</div>',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => 'core/components/tickets/elements/chunks/chunk.ticket_sections_wrapper.tpl',
      'content' => '[[+modx.user.id:isloggedin:is=`1`:then=`
<span class="tickets-subscribe pull-right">
	<label for="tickets-subscribe" class="checkbox">
		<input type="checkbox" name="" id="tickets-subscribe" value="1" data-id="[[*id]]" [[+subscribed:notempty=`checked`]] /> [[%tickets_section_notify]]
	</label>
</span>
`:else=``]]

<div class="tickets-list">
	[[+output]]
</div>',
    ),
  ),
  '3a03d6debe71b9d86aac1b7991ab9a44' => 
  array (
    'criteria' => 
    array (
      'name' => 'tpl.Tickets.meta',
    ),
    'object' => 
    array (
      'id' => 49,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'tpl.Tickets.meta',
      'description' => '',
      'editor_type' => 0,
      'category' => 12,
      'cache_type' => 0,
      'snippet' => '<div class="ticket-meta row" data-id="[[+id]]">
	<span class="col-md-5">
		<i class="glyphicon glyphicon-calendar"></i> [[+date_ago]]
		&nbsp;&nbsp;
		<i class="glyphicon glyphicon-user"></i> [[+fullname]]
	</span>
	<span class="col-md-2"><a href="[[~[[+section.id]]]]"><i class="glyphicon glyphicon-folder-open"></i> [[+section.pagetitle]]</a></span>
	<span class="col-md-2">
		<span class="ticket-star[[+can_star]]">[[+stared]][[+unstared]] <span class="ticket-star-count">[[+stars]]</span></span>
		&nbsp;&nbsp;
		<i class="glyphicon glyphicon-eye-open"></i> [[+views]]
	</span>
	<span class="col-md-2 pull-right ticket-rating[[+active]][[+inactive]]">
		<span class="vote plus[[+voted_plus]]" title="[[%ticket_like]]">
			<i class="glyphicon glyphicon-arrow-up"></i>
		</span>
		[[+can_vote]][[+cant_vote]]
		<span class="vote minus[[+voted_minus]]" title="[[%ticket_dislike]]">
			<i class="glyphicon glyphicon-arrow-down"></i>
		</span>
	</span>
</div>
[[+has_files]]

<!--tickets_can_vote <span class="vote rating" title="[[%ticket_refrain]]"><i class="glyphicon glyphicon-minus"></i></span>-->
<!--tickets_cant_vote <span class="rating[[+rating_positive]][[+rating_negative]]" title="[[%ticket_rating_total]] [[+rating_total]]: ↑[[+rating_plus]] [[%ticket_rating_and]] ↓[[+rating_minus]]">[[+rating]]</span>-->
<!--tickets_active  active-->
<!--tickets_inactive  inactive-->
<!--tickets_voted_plus  voted-->
<!--tickets_voted_minus  voted-->
<!--tickets_rating_positive  positive-->
<!--tickets_rating_negative  negative-->
<!--tickets_has_files
<ul class="ticket-files">
	<strong>[[%ticket_uploaded_files]]:</strong>
	[[+files]]
</ul>-->
<!--tickets_can_star  active-->
<!--tickets_stared <i class="glyphicon glyphicon-star stared star"></i>-->
<!--tickets_unstared <i class="glyphicon glyphicon-star unstared star"></i>-->',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => 'core/components/tickets/elements/chunks/chunk.ticket_meta.tpl',
      'content' => '<div class="ticket-meta row" data-id="[[+id]]">
	<span class="col-md-5">
		<i class="glyphicon glyphicon-calendar"></i> [[+date_ago]]
		&nbsp;&nbsp;
		<i class="glyphicon glyphicon-user"></i> [[+fullname]]
	</span>
	<span class="col-md-2"><a href="[[~[[+section.id]]]]"><i class="glyphicon glyphicon-folder-open"></i> [[+section.pagetitle]]</a></span>
	<span class="col-md-2">
		<span class="ticket-star[[+can_star]]">[[+stared]][[+unstared]] <span class="ticket-star-count">[[+stars]]</span></span>
		&nbsp;&nbsp;
		<i class="glyphicon glyphicon-eye-open"></i> [[+views]]
	</span>
	<span class="col-md-2 pull-right ticket-rating[[+active]][[+inactive]]">
		<span class="vote plus[[+voted_plus]]" title="[[%ticket_like]]">
			<i class="glyphicon glyphicon-arrow-up"></i>
		</span>
		[[+can_vote]][[+cant_vote]]
		<span class="vote minus[[+voted_minus]]" title="[[%ticket_dislike]]">
			<i class="glyphicon glyphicon-arrow-down"></i>
		</span>
	</span>
</div>
[[+has_files]]

<!--tickets_can_vote <span class="vote rating" title="[[%ticket_refrain]]"><i class="glyphicon glyphicon-minus"></i></span>-->
<!--tickets_cant_vote <span class="rating[[+rating_positive]][[+rating_negative]]" title="[[%ticket_rating_total]] [[+rating_total]]: ↑[[+rating_plus]] [[%ticket_rating_and]] ↓[[+rating_minus]]">[[+rating]]</span>-->
<!--tickets_active  active-->
<!--tickets_inactive  inactive-->
<!--tickets_voted_plus  voted-->
<!--tickets_voted_minus  voted-->
<!--tickets_rating_positive  positive-->
<!--tickets_rating_negative  negative-->
<!--tickets_has_files
<ul class="ticket-files">
	<strong>[[%ticket_uploaded_files]]:</strong>
	[[+files]]
</ul>-->
<!--tickets_can_star  active-->
<!--tickets_stared <i class="glyphicon glyphicon-star stared star"></i>-->
<!--tickets_unstared <i class="glyphicon glyphicon-star unstared star"></i>-->',
    ),
  ),
  '3b28edbd28142016748b10624b25145e' => 
  array (
    'criteria' => 
    array (
      'name' => 'tpl.Tickets.meta.file',
    ),
    'object' => 
    array (
      'id' => 50,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'tpl.Tickets.meta.file',
      'description' => '',
      'editor_type' => 0,
      'category' => 12,
      'cache_type' => 0,
      'snippet' => '<li>
	<a href="[[+url]]" target="_blank">[[+name]]</a> [[+size]] kb
</li>',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => 'core/components/tickets/elements/chunks/chunk.ticket_meta_file.tpl',
      'content' => '<li>
	<a href="[[+url]]" target="_blank">[[+name]]</a> [[+size]] kb
</li>',
    ),
  ),
  '50cd2132f72b0210a1dd72f76cd4b2f1' => 
  array (
    'criteria' => 
    array (
      'name' => 'TicketForm',
    ),
    'object' => 
    array (
      'id' => 49,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'TicketForm',
      'description' => '',
      'editor_type' => 0,
      'category' => 12,
      'cache_type' => 0,
      'snippet' => '/* @var array $scriptProperties */
/* @var Tickets $Tickets */
$Tickets = $modx->getService(\'tickets\', \'Tickets\', $modx->getOption(\'tickets.core_path\', null, $modx->getOption(\'core_path\') . \'components/tickets/\') . \'model/tickets/\', $scriptProperties);
$Tickets->initialize($modx->context->key, $scriptProperties);

if (!$Tickets->authenticated) {
	return $modx->lexicon(\'ticket_err_no_auth\');
}

$tplSectionRow = $modx->getOption(\'tplSectionRow\', $scriptProperties, \'tpl.Tickets.sections.row\');
$tplFormCreate = $modx->getOption(\'tplFormCreate\', $scriptProperties, \'tpl.Tickets.form.create\');
$tplFormUpdate = $modx->getOption(\'tplFormUpdate\', $scriptProperties, \'tpl.Tickets.form.update\');
$tplFiles = $modx->getOption(\'tplFiles\', $scriptProperties, \'tpl.Tickets.form.files\');
$tplFile = $Tickets->config[\'tplFile\'] = $modx->getOption(\'tplFile\', $scriptProperties, \'tpl.Tickets.form.file\', true);
$tplImage = $Tickets->config[\'tplImage\'] = $modx->getOption(\'tplImage\', $scriptProperties, \'tpl.Tickets.form.image\', true);
if (empty($source)) {
	$source = $Tickets->config[\'source\'] = $modx->getOption(\'tickets.source_default\', null, $modx->getOption(\'default_media_source\'));
}
$tid = !empty($_REQUEST[\'tid\'])
	? (int)$_REQUEST[\'tid\']
	: 0;
$parent = !empty($_REQUEST[\'parent\'])
	? $_REQUEST[\'parent\']
	: \'\';
$data = array();

// Update of ticket
if (!empty($tid)) {
	$tplWrapper = $tplFormUpdate;
	/* @var Ticket $ticket */
	if ($ticket = $modx->getObject(\'Ticket\', array(\'class_key\' => \'Ticket\', \'id\' => $tid))) {
		if ($ticket->get(\'createdby\') != $modx->user->id && !$modx->hasPermission(\'edit_document\')) {
			return $modx->lexicon(\'ticket_err_wrong_user\');
		}
		$charset = $modx->getOption(\'modx_charset\');
		$allowedFields = array_map(\'trim\', explode(\',\', $scriptProperties[\'allowedFields\']));
		$allowedFields = array_unique(array_merge($allowedFields, array(\'parent\', \'pagetitle\', \'content\')));

		$fields = array_keys($modx->getFieldMeta(\'Ticket\'));
		foreach ($allowedFields as $field) {
			$value = in_array($field, $fields)
				? $ticket->get($field)
				: $ticket->getTVValue($field);
			if (is_string($value)) {
				$value = html_entity_decode($value, ENT_QUOTES, $charset);
				$value = str_replace(
					array(\'[^\', \'^]\', \'[\', \']\', \'{\', \'}\'),
					array(\'&#91;^\', \'^&#93;\', \'*(*(*(*(*(*\', \'*)*)*)*)*)*\', \'~(~(~(~(~(~\', \'~)~)~)~)~)~\'),
					$value
				);
				$value = htmlentities($value, ENT_QUOTES, $charset);
			}
			$data[$field] = $value;
		}
		$data[\'id\'] = $ticket->id;
		$data[\'published\'] = $ticket->published;
		if (empty($parent)) {
			$parent = $ticket->get(\'parent\');
		}
	}
	else {
		return $modx->lexicon(\'ticket_err_id\', array(\'id\' => $tid));
	}
}
else {
	$tplWrapper = $tplFormCreate;
}

// Get available sections for ticket create
$data[\'sections\'] = \'\';
/** @var modProcessorResponse $response */
$response = $Tickets->runProcessor(\'web/section/getlist\', array(
	\'parents\' => $scriptProperties[\'parents\'],
	\'resources\' => $scriptProperties[\'resources\'],
	\'permissions\' => $scriptProperties[\'permissions\'],
	\'sortby\' => !empty($scriptProperties[\'sortby\'])
		? $scriptProperties[\'sortby\']
		: \'pagetitle\',
	\'sortdir\' => !empty($scriptProperties[\'sortdir\'])
		? $scriptProperties[\'sortdir\']
		: \'asc\',
	\'depth\' => isset($scriptProperties[\'depth\'])
		? $scriptProperties[\'depth\']
		: 0,
	\'context\' => !empty($scriptProperties[\'context\'])
		? $scriptProperties[\'context\']
		: $modx->context->key,
	\'limit\' => 0,
));
$response = $modx->fromJSON($response->getResponse());

if (!empty($response[\'results\'])) {
	$Tickets->config[\'sections\'] = array();
	foreach ($response[\'results\'] as $v) {
		$v[\'selected\'] = $parent == $v[\'id\'] || $parent == $v[\'alias\']
			? \'selected\'
			: \'\';
		$data[\'sections\'] .= $Tickets->getChunk($tplSectionRow, $v);
		$Tickets->config[\'sections\'][] = $v[\'id\'];
	}
}

if (!empty($allowFiles)) {
	$q = $modx->newQuery(\'TicketFile\');
	$q->where(array(\'class\' => \'Ticket\'));
	$q->andCondition(array(\'parent\' => 0, \'createdby\' => $modx->user->id), null, 1);
	if (!empty($tid)) {
		$q->orCondition(array(\'parent\' => $tid), null, 1);
	}
	$q->sortby(\'createdon\', \'ASC\');
	$collection = $modx->getIterator(\'TicketFile\', $q);
	$files = \'\';
	/** @var TicketFile $item */
	foreach ($collection as $item) {
		if ($item->get(\'deleted\') && !$item->get(\'parent\')) {
			$item->remove();
		}
		else {
			$item = $item->toArray();
			$item[\'size\'] = round($item[\'size\'] / 1024, 2);
			$item[\'new\'] = empty($item[\'parent\']);
			$tpl = $item[\'type\'] == \'image\'
				? $tplImage
				: $tplFile;
			$files .= $Tickets->getChunk($tpl, $item);
		}
	}
	$data[\'files\'] = $Tickets->getChunk($tplFiles, array(
		\'files\' => $files,
	));
	/** @var modMediaSource $source */
	if ($source = $modx->getObject(\'sources.modMediaSource\', $source)) {
		$properties = $source->getPropertyList();
		$config = array(
			\'size\' => !empty($properties[\'maxUploadSize\'])
				? $properties[\'maxUploadSize\']
				: 3145728,
			\'height\' => !empty($properties[\'maxUploadHeight\'])
				? $properties[\'maxUploadHeight\']
				: 1080,
			\'width\' => !empty($properties[\'maxUploadWidth\'])
				? $properties[\'maxUploadWidth\']
				: 1920,
			\'extensions\' => !empty($properties[\'allowedFileTypes\'])
				? $properties[\'allowedFileTypes\']
				: \'jpg,jpeg,png,gif\'
		);
		$modx->regClientStartupScript(\'<script type="text/javascript">TicketsConfig.source=\' . $modx->toJSON($config) . \';</script>\', true);
	}
	$modx->regClientScript($Tickets->config[\'jsUrl\'] . \'web/lib/plupload/plupload.full.min.js\');
	$modx->regClientScript($Tickets->config[\'jsUrl\'] . \'web/files.js\');

	$lang = $modx->getOption(\'cultureKey\');
	if ($lang != \'en\' && file_exists($Tickets->config[\'jsPath\'] . \'web/lib/plupload/i18n/\' . $lang . \'.js\')) {
		$modx->regClientScript($Tickets->config[\'jsUrl\'] . \'web/lib/plupload/i18n/\' . $lang . \'.js\');
	}
}

$output = $Tickets->getChunk($tplWrapper, $data);
$key = md5($modx->toJSON($Tickets->config));
$_SESSION[\'TicketForm\'][$key] = $Tickets->config;
$output = str_ireplace(\'</form>\', "\\n<input type=\\"hidden\\" name=\\"form_key\\" value=\\"{$key}\\" class=\\"disable-sisyphus\\" />\\n</form>", $output);

return $output;',
      'locked' => 0,
      'properties' => 'a:21:{s:13:"tplFormCreate";a:7:{s:4:"name";s:13:"tplFormCreate";s:4:"desc";s:26:"tickets_prop_tplFormCreate";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:23:"tpl.Tickets.form.create";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:13:"tplFormUpdate";a:7:{s:4:"name";s:13:"tplFormUpdate";s:4:"desc";s:26:"tickets_prop_tplFormUpdate";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:23:"tpl.Tickets.form.update";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:10:"tplPreview";a:7:{s:4:"name";s:10:"tplPreview";s:4:"desc";s:23:"tickets_prop_tplPreview";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:24:"tpl.Tickets.form.preview";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:13:"tplSectionRow";a:7:{s:4:"name";s:13:"tplSectionRow";s:4:"desc";s:26:"tickets_prop_tplSectionRow";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:69:"@INLINE <option value="[[+id]]" [[+selected]]>[[+pagetitle]]</option>";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:17:"tplTicketEmailBcc";a:7:{s:4:"name";s:17:"tplTicketEmailBcc";s:4:"desc";s:30:"tickets_prop_tplTicketEmailBcc";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:28:"tpl.Tickets.ticket.email.bcc";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:26:"tplTicketEmailSubscription";a:7:{s:4:"name";s:26:"tplTicketEmailSubscription";s:4:"desc";s:39:"tickets_prop_tplTicketEmailSubscription";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:37:"tpl.Tickets.ticket.email.subscription";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:13:"allowedFields";a:7:{s:4:"name";s:13:"allowedFields";s:4:"desc";s:26:"tickets_prop_allowedFields";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:24:"parent,pagetitle,content";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:14:"requiredFields";a:7:{s:4:"name";s:14:"requiredFields";s:4:"desc";s:27:"tickets_prop_requiredFields";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:24:"parent,pagetitle,content";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:12:"bypassFields";a:7:{s:4:"name";s:12:"bypassFields";s:4:"desc";s:25:"tickets_prop_bypassFields";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:19:"redirectUnpublished";a:7:{s:4:"name";s:19:"redirectUnpublished";s:4:"desc";s:32:"tickets_prop_redirectUnpublished";s:4:"type";s:11:"numberfield";s:7:"options";a:0:{}s:5:"value";i:0;s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:7:"parents";a:7:{s:4:"name";s:7:"parents";s:4:"desc";s:29:"tickets_prop_sections_parents";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:9:"resources";a:7:{s:4:"name";s:9:"resources";s:4:"desc";s:31:"tickets_prop_sections_resources";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:11:"permissions";a:7:{s:4:"name";s:11:"permissions";s:4:"desc";s:33:"tickets_prop_sections_permissions";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:20:"section_add_children";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:6:"sortby";a:7:{s:4:"name";s:6:"sortby";s:4:"desc";s:28:"tickets_prop_sections_sortby";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:9:"pagetitle";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:7:"sortdir";a:7:{s:4:"name";s:7:"sortdir";s:4:"desc";s:29:"tickets_prop_sections_sortdir";s:4:"type";s:4:"list";s:7:"options";a:2:{i:0;a:2:{s:4:"text";s:3:"ASC";s:5:"value";s:3:"ASC";}i:1;a:2:{s:4:"text";s:4:"DESC";s:5:"value";s:4:"DESC";}}s:5:"value";s:3:"ASC";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:7:"context";a:7:{s:4:"name";s:7:"context";s:4:"desc";s:29:"tickets_prop_sections_context";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:10:"allowFiles";a:7:{s:4:"name";s:10:"allowFiles";s:4:"desc";s:23:"tickets_prop_allowFiles";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:1;s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:6:"source";a:7:{s:4:"name";s:6:"source";s:4:"desc";s:19:"tickets_prop_source";s:4:"type";s:11:"numberfield";s:7:"options";a:0:{}s:5:"value";i:0;s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:8:"tplFiles";a:7:{s:4:"name";s:8:"tplFiles";s:4:"desc";s:21:"tickets_prop_tplFiles";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:22:"tpl.Tickets.form.files";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:7:"tplFile";a:7:{s:4:"name";s:7:"tplFile";s:4:"desc";s:20:"tickets_prop_tplFile";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:21:"tpl.Tickets.form.file";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:8:"tplImage";a:7:{s:4:"name";s:8:"tplImage";s:4:"desc";s:21:"tickets_prop_tplImage";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:22:"tpl.Tickets.form.image";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}}',
      'moduleguid' => '',
      'static' => 0,
      'static_file' => 'core/components/tickets/elements/snippets/snippet.ticket_form.php',
      'content' => '/* @var array $scriptProperties */
/* @var Tickets $Tickets */
$Tickets = $modx->getService(\'tickets\', \'Tickets\', $modx->getOption(\'tickets.core_path\', null, $modx->getOption(\'core_path\') . \'components/tickets/\') . \'model/tickets/\', $scriptProperties);
$Tickets->initialize($modx->context->key, $scriptProperties);

if (!$Tickets->authenticated) {
	return $modx->lexicon(\'ticket_err_no_auth\');
}

$tplSectionRow = $modx->getOption(\'tplSectionRow\', $scriptProperties, \'tpl.Tickets.sections.row\');
$tplFormCreate = $modx->getOption(\'tplFormCreate\', $scriptProperties, \'tpl.Tickets.form.create\');
$tplFormUpdate = $modx->getOption(\'tplFormUpdate\', $scriptProperties, \'tpl.Tickets.form.update\');
$tplFiles = $modx->getOption(\'tplFiles\', $scriptProperties, \'tpl.Tickets.form.files\');
$tplFile = $Tickets->config[\'tplFile\'] = $modx->getOption(\'tplFile\', $scriptProperties, \'tpl.Tickets.form.file\', true);
$tplImage = $Tickets->config[\'tplImage\'] = $modx->getOption(\'tplImage\', $scriptProperties, \'tpl.Tickets.form.image\', true);
if (empty($source)) {
	$source = $Tickets->config[\'source\'] = $modx->getOption(\'tickets.source_default\', null, $modx->getOption(\'default_media_source\'));
}
$tid = !empty($_REQUEST[\'tid\'])
	? (int)$_REQUEST[\'tid\']
	: 0;
$parent = !empty($_REQUEST[\'parent\'])
	? $_REQUEST[\'parent\']
	: \'\';
$data = array();

// Update of ticket
if (!empty($tid)) {
	$tplWrapper = $tplFormUpdate;
	/* @var Ticket $ticket */
	if ($ticket = $modx->getObject(\'Ticket\', array(\'class_key\' => \'Ticket\', \'id\' => $tid))) {
		if ($ticket->get(\'createdby\') != $modx->user->id && !$modx->hasPermission(\'edit_document\')) {
			return $modx->lexicon(\'ticket_err_wrong_user\');
		}
		$charset = $modx->getOption(\'modx_charset\');
		$allowedFields = array_map(\'trim\', explode(\',\', $scriptProperties[\'allowedFields\']));
		$allowedFields = array_unique(array_merge($allowedFields, array(\'parent\', \'pagetitle\', \'content\')));

		$fields = array_keys($modx->getFieldMeta(\'Ticket\'));
		foreach ($allowedFields as $field) {
			$value = in_array($field, $fields)
				? $ticket->get($field)
				: $ticket->getTVValue($field);
			if (is_string($value)) {
				$value = html_entity_decode($value, ENT_QUOTES, $charset);
				$value = str_replace(
					array(\'[^\', \'^]\', \'[\', \']\', \'{\', \'}\'),
					array(\'&#91;^\', \'^&#93;\', \'*(*(*(*(*(*\', \'*)*)*)*)*)*\', \'~(~(~(~(~(~\', \'~)~)~)~)~)~\'),
					$value
				);
				$value = htmlentities($value, ENT_QUOTES, $charset);
			}
			$data[$field] = $value;
		}
		$data[\'id\'] = $ticket->id;
		$data[\'published\'] = $ticket->published;
		if (empty($parent)) {
			$parent = $ticket->get(\'parent\');
		}
	}
	else {
		return $modx->lexicon(\'ticket_err_id\', array(\'id\' => $tid));
	}
}
else {
	$tplWrapper = $tplFormCreate;
}

// Get available sections for ticket create
$data[\'sections\'] = \'\';
/** @var modProcessorResponse $response */
$response = $Tickets->runProcessor(\'web/section/getlist\', array(
	\'parents\' => $scriptProperties[\'parents\'],
	\'resources\' => $scriptProperties[\'resources\'],
	\'permissions\' => $scriptProperties[\'permissions\'],
	\'sortby\' => !empty($scriptProperties[\'sortby\'])
		? $scriptProperties[\'sortby\']
		: \'pagetitle\',
	\'sortdir\' => !empty($scriptProperties[\'sortdir\'])
		? $scriptProperties[\'sortdir\']
		: \'asc\',
	\'depth\' => isset($scriptProperties[\'depth\'])
		? $scriptProperties[\'depth\']
		: 0,
	\'context\' => !empty($scriptProperties[\'context\'])
		? $scriptProperties[\'context\']
		: $modx->context->key,
	\'limit\' => 0,
));
$response = $modx->fromJSON($response->getResponse());

if (!empty($response[\'results\'])) {
	$Tickets->config[\'sections\'] = array();
	foreach ($response[\'results\'] as $v) {
		$v[\'selected\'] = $parent == $v[\'id\'] || $parent == $v[\'alias\']
			? \'selected\'
			: \'\';
		$data[\'sections\'] .= $Tickets->getChunk($tplSectionRow, $v);
		$Tickets->config[\'sections\'][] = $v[\'id\'];
	}
}

if (!empty($allowFiles)) {
	$q = $modx->newQuery(\'TicketFile\');
	$q->where(array(\'class\' => \'Ticket\'));
	$q->andCondition(array(\'parent\' => 0, \'createdby\' => $modx->user->id), null, 1);
	if (!empty($tid)) {
		$q->orCondition(array(\'parent\' => $tid), null, 1);
	}
	$q->sortby(\'createdon\', \'ASC\');
	$collection = $modx->getIterator(\'TicketFile\', $q);
	$files = \'\';
	/** @var TicketFile $item */
	foreach ($collection as $item) {
		if ($item->get(\'deleted\') && !$item->get(\'parent\')) {
			$item->remove();
		}
		else {
			$item = $item->toArray();
			$item[\'size\'] = round($item[\'size\'] / 1024, 2);
			$item[\'new\'] = empty($item[\'parent\']);
			$tpl = $item[\'type\'] == \'image\'
				? $tplImage
				: $tplFile;
			$files .= $Tickets->getChunk($tpl, $item);
		}
	}
	$data[\'files\'] = $Tickets->getChunk($tplFiles, array(
		\'files\' => $files,
	));
	/** @var modMediaSource $source */
	if ($source = $modx->getObject(\'sources.modMediaSource\', $source)) {
		$properties = $source->getPropertyList();
		$config = array(
			\'size\' => !empty($properties[\'maxUploadSize\'])
				? $properties[\'maxUploadSize\']
				: 3145728,
			\'height\' => !empty($properties[\'maxUploadHeight\'])
				? $properties[\'maxUploadHeight\']
				: 1080,
			\'width\' => !empty($properties[\'maxUploadWidth\'])
				? $properties[\'maxUploadWidth\']
				: 1920,
			\'extensions\' => !empty($properties[\'allowedFileTypes\'])
				? $properties[\'allowedFileTypes\']
				: \'jpg,jpeg,png,gif\'
		);
		$modx->regClientStartupScript(\'<script type="text/javascript">TicketsConfig.source=\' . $modx->toJSON($config) . \';</script>\', true);
	}
	$modx->regClientScript($Tickets->config[\'jsUrl\'] . \'web/lib/plupload/plupload.full.min.js\');
	$modx->regClientScript($Tickets->config[\'jsUrl\'] . \'web/files.js\');

	$lang = $modx->getOption(\'cultureKey\');
	if ($lang != \'en\' && file_exists($Tickets->config[\'jsPath\'] . \'web/lib/plupload/i18n/\' . $lang . \'.js\')) {
		$modx->regClientScript($Tickets->config[\'jsUrl\'] . \'web/lib/plupload/i18n/\' . $lang . \'.js\');
	}
}

$output = $Tickets->getChunk($tplWrapper, $data);
$key = md5($modx->toJSON($Tickets->config));
$_SESSION[\'TicketForm\'][$key] = $Tickets->config;
$output = str_ireplace(\'</form>\', "\\n<input type=\\"hidden\\" name=\\"form_key\\" value=\\"{$key}\\" class=\\"disable-sisyphus\\" />\\n</form>", $output);

return $output;',
    ),
  ),
  'eb37345534baf4bb8143d9d86f3128ed' => 
  array (
    'criteria' => 
    array (
      'name' => 'TicketComments',
    ),
    'object' => 
    array (
      'id' => 50,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'TicketComments',
      'description' => '',
      'editor_type' => 0,
      'category' => 12,
      'cache_type' => 0,
      'snippet' => '/** @var array $scriptProperties */
if (empty($thread)) {
	$scriptProperties[\'thread\'] = $modx->getOption(\'thread\', $scriptProperties, \'resource-\' . $modx->resource->id, true);
}
$scriptProperties[\'resource\'] = $modx->resource->get(\'id\');
$scriptProperties[\'snippetPrepareComment\'] = $modx->getOption(\'tickets.snippet_prepare_comment\');
$scriptProperties[\'commentEditTime\'] = $modx->getOption(\'tickets.comment_edit_time\', null, 180);

$depth = $modx->getOption(\'depth\', $scriptProperties, 0);
$tplComments = $modx->getOption(\'tplComments\', $scriptProperties, \'tpl.Tickets.comment.wrapper\');
$tplCommentForm = $modx->getOption(\'tplCommentForm\', $scriptProperties, \'tpl.Tickets.comment.form\');
$tplCommentFormGuest = $modx->getOption(\'tplCommentFormGuest\', $scriptProperties, \'tpl.Tickets.comment.form.guest\');
$tplCommentAuth = $modx->getOption(\'tplCommentAuth\', $scriptProperties, \'tpl.Tickets.comment.one.auth\');
$tplCommentGuest = $modx->getOption(\'tplCommentGuest\', $scriptProperties, \'tpl.Tickets.comment.one.guest\');
$tplLoginToComment = $modx->getOption(\'tplLoginToComment\', $scriptProperties, \'tpl.Tickets.comment.login\');
$outputSeparator = $modx->getOption(\'outputSeparator\', $scriptProperties, "\\n");

/** @var Tickets $Tickets */
$Tickets = $modx->getService(\'tickets\', \'Tickets\', $modx->getOption(\'tickets.core_path\', null, $modx->getOption(\'core_path\') . \'components/tickets/\') . \'model/tickets/\', $scriptProperties);
$Tickets->initialize($modx->context->key, $scriptProperties);

/** @var pdoFetch $pdoFetch */
$pdoFetch = $modx->getService(\'pdoFetch\');
$pdoFetch->setConfig($scriptProperties);
$pdoFetch->addTime(\'pdoTools loaded\');

// Prepare Ticket Thread
/** @var TicketThread $thread */
if (!$thread = $modx->getObject(\'TicketThread\', array(\'name\' => $scriptProperties[\'thread\']))) {
	$thread = $modx->newObject(\'TicketThread\');
	$thread->fromArray(array(
		\'name\' => $scriptProperties[\'thread\'],
		\'resource\' => $modx->resource->get(\'id\'),
		\'createdby\' => $modx->user->id,
		\'createdon\' => date(\'Y-m-d H:i:s\'),
		\'subscribers\' => array($modx->resource->get(\'createdby\')),
	));
}
elseif ($thread->get(\'deleted\')) {
	return $modx->lexicon(\'ticket_thread_err_deleted\');
}
// Prepare session for guests
if (!empty($allowGuest) && !isset($_SESSION[\'TicketComments\'])) {
	$_SESSION[\'TicketComments\'] = array(\'name\' => \'\', \'email\' => \'\', \'ids\' => array());
}

// Migrate authors to subscription system
if (!is_array($thread->get(\'subscribers\'))) {
	$thread->set(\'subscribers\', array($modx->resource->get(\'createdby\')));
}
$thread->set(\'resource\', $modx->resource->get(\'id\'));
$thread->set(\'properties\', $scriptProperties);
$thread->save();

// Prepare query to db
$class = \'TicketComment\';
$where = array();
if (empty($showUnpublished)) {
	$where[\'published\'] = 1;
}

// Joining tables
$innerJoin = array(
	\'Thread\' => array(
		\'class\' => \'TicketThread\',
		\'on\' => \'`Thread`.`id` = `TicketComment`.`thread` AND `Thread`.`name` = "\' . $thread->get(\'name\') . \'"\'
	)
);
$leftJoin = array(
	\'User\' => array(\'class\' => \'modUser\', \'on\' => \'`User`.`id` = `TicketComment`.`createdby`\'),
	\'Profile\' => array(\'class\' => \'modUserProfile\', \'on\' => \'`Profile`.`internalKey` = `TicketComment`.`createdby`\'),
);
if ($Tickets->authenticated) {
	$leftJoin[\'Vote\'] = array(
		\'class\' => \'TicketVote\',
		\'on\' => \'`Vote`.`id` = `TicketComment`.`id` AND `Vote`.`class` = "TicketComment" AND `Vote`.`createdby` = \' . $modx->user->id
	);
	$leftJoin[\'Star\'] = array(
		\'class\' => \'TicketStar\',
		\'on\' => \'`Star`.`id` = `TicketComment`.`id` AND `Star`.`class` = "TicketComment" AND `Star`.`createdby` = \' . $modx->user->id
	);
}
// Fields to select
$select = array(
	\'TicketComment\' => $modx->getSelectColumns(\'TicketComment\', \'TicketComment\', \'\', array(\'raw\'), true) . \', `parent` as `new_parent`, `rating` as `rating_total`\',
	\'Thread\' => \'`Thread`.`resource`\',
	\'User\' => \'`User`.`username`\',
	\'Profile\' => $modx->getSelectColumns(\'modUserProfile\', \'Profile\', \'\', array(\'id\', \'email\'), true) . \',`Profile`.`email` as `user_email`\',
);
if ($Tickets->authenticated) {
	$select[\'Vote\'] = \'`Vote`.`value` as `vote`\';
	$select[\'Star\'] = \'COUNT(`Star`.`id`) as `star`\';
}

// Add custom parameters
foreach (array(\'where\', \'select\', \'leftJoin\', \'innerJoin\') as $v) {
	if (!empty($scriptProperties[$v])) {
		$tmp = $modx->fromJSON($scriptProperties[$v]);
		if (is_array($tmp)) {
			$$v = array_merge($$v, $tmp);
		}
	}
	unset($scriptProperties[$v]);
}
$pdoFetch->addTime(\'Conditions prepared\');

$default = array(
	\'class\' => $class,
	\'where\' => $modx->toJSON($where),
	\'innerJoin\' => $modx->toJSON($innerJoin),
	\'leftJoin\' => $modx->toJSON($leftJoin),
	\'select\' => $modx->toJSON($select),
	\'sortby\' => $class . \'.id\',
	\'sortdir\' => \'ASC\',
	\'groupby\' => $class . \'.id\',
	\'limit\' => 0,
	\'fastMode\' => true,
	\'return\' => \'data\',
	\'nestedChunkPrefix\' => \'tickets_\',
);

// Merge all properties and run!
$pdoFetch->setConfig(array_merge($default, $scriptProperties), false);
$pdoFetch->addTime(\'Query parameters prepared.\');
$rows = $pdoFetch->run();

// Processing rows
$output = $commentsThread = null;
if (!empty($rows) && is_array($rows)) {
	$tmp = array();
	$i = 1;
	foreach ($rows as $row) {
		$row[\'idx\'] = $i++;
		$tmp[$row[\'id\']] = $row;
	}
	$rows = $thread->buildTree($tmp, $depth);
	unset($tmp, $i);

	if (!empty($formBefore)) {
		$rows = array_reverse($rows);
	}

	$tpl = !$thread->get(\'closed\') && ($Tickets->authenticated || !empty($allowGuest))
		? $tplCommentAuth
		: $tplCommentGuest;
	foreach ($rows as $row) {
		$output[] = $Tickets->templateNode($row, $tpl);
	}

	$pdoFetch->addTime(\'Returning processed chunks\');
	$output = implode($outputSeparator, $output);
}

$commentsThread = $pdoFetch->getChunk($tplComments, array(
	\'total\' => $modx->getPlaceholder($pdoFetch->config[\'totalVar\']),
	\'comments\' => $output,
	\'subscribed\' => $thread->isSubscribed(),
));

$pls = array(\'thread\' => $scriptProperties[\'thread\']);
if (!$Tickets->authenticated && empty($allowGuest)) {
	$form = $pdoFetch->getChunk($tplLoginToComment);
}
elseif (!$Tickets->authenticated) {
	$pls[\'name\'] = $_SESSION[\'TicketComments\'][\'name\'];
	$pls[\'email\'] = $_SESSION[\'TicketComments\'][\'email\'];
	if (!empty($enableCaptcha)) {
		$tmp = $Tickets->getCaptcha();
		$pls[\'captcha\'] = $modx->lexicon(\'ticket_comment_captcha\', $tmp);
	}
	$form = $pdoFetch->getChunk($tplCommentFormGuest, $pls);
}
else {
	$form = $pdoFetch->getChunk($tplCommentForm, $pls);
}

$commentForm = $thread->get(\'closed\')
	? $modx->lexicon(\'ticket_thread_err_closed\')
	: $form;
$output = !empty($formBefore)
	? $commentForm . $commentsThread
	: $commentsThread . $commentForm;

if ($modx->user->hasSessionContext(\'mgr\') && !empty($showLog)) {
	$output .= \'<pre class="CommentsLog">\' . print_r($pdoFetch->getTime(), 1) . \'</pre>\';
}

$modx->regClientStartupScript(\'<script type="text/javascript">TicketsConfig.formBefore = \' . (int)!empty($formBefore) . \';TicketsConfig.thread_depth = \' . (int)$depth . \';</script>\', true);

// Return output
if (!empty($toPlaceholder)) {
	$modx->setPlaceholder($toPlaceholder, $output);
}
else {
	return $output;
}',
      'locked' => 0,
      'properties' => 'a:29:{s:10:"allowGuest";a:7:{s:4:"name";s:10:"allowGuest";s:4:"desc";s:23:"tickets_prop_allowGuest";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:0;s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:14:"allowGuestEdit";a:7:{s:4:"name";s:14:"allowGuestEdit";s:4:"desc";s:27:"tickets_prop_allowGuestEdit";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:1;s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:16:"allowGuestEmails";a:7:{s:4:"name";s:16:"allowGuestEmails";s:4:"desc";s:29:"tickets_prop_allowGuestEmails";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:0;s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:11:"autoPublish";a:7:{s:4:"name";s:11:"autoPublish";s:4:"desc";s:24:"tickets_prop_autoPublish";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:1;s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:16:"autoPublishGuest";a:7:{s:4:"name";s:16:"autoPublishGuest";s:4:"desc";s:29:"tickets_prop_autoPublishGuest";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:1;s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:5:"depth";a:7:{s:4:"name";s:5:"depth";s:4:"desc";s:26:"tickets_prop_commentsDepth";s:4:"type";s:11:"numberfield";s:7:"options";a:0:{}s:5:"value";i:0;s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:13:"enableCaptcha";a:7:{s:4:"name";s:13:"enableCaptcha";s:4:"desc";s:26:"tickets_prop_enableCaptcha";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:1;s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:8:"fastMode";a:7:{s:4:"name";s:8:"fastMode";s:4:"desc";s:21:"tickets_prop_fastMode";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:1;s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:10:"formBefore";a:7:{s:4:"name";s:10:"formBefore";s:4:"desc";s:23:"tickets_prop_formBefore";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:0;s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:12:"gravatarIcon";a:7:{s:4:"name";s:12:"gravatarIcon";s:4:"desc";s:25:"tickets_prop_gravatarIcon";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:2:"mm";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:12:"gravatarSize";a:7:{s:4:"name";s:12:"gravatarSize";s:4:"desc";s:25:"tickets_prop_gravatarSize";s:4:"type";s:11:"numberfield";s:7:"options";a:0:{}s:5:"value";s:2:"24";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:11:"gravatarUrl";a:7:{s:4:"name";s:11:"gravatarUrl";s:4:"desc";s:24:"tickets_prop_gravatarUrl";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:32:"https://www.gravatar.com/avatar/";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:10:"maxCaptcha";a:7:{s:4:"name";s:10:"maxCaptcha";s:4:"desc";s:23:"tickets_prop_maxCaptcha";s:4:"type";s:11:"numberfield";s:7:"options";a:0:{}s:5:"value";i:10;s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:10:"minCaptcha";a:7:{s:4:"name";s:10:"minCaptcha";s:4:"desc";s:23:"tickets_prop_minCaptcha";s:4:"type";s:11:"numberfield";s:7:"options";a:0:{}s:5:"value";i:1;s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:14:"requiredFields";a:7:{s:4:"name";s:14:"requiredFields";s:4:"desc";s:27:"tickets_prop_requiredFields";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:10:"name,email";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:6:"thread";a:7:{s:4:"name";s:6:"thread";s:4:"desc";s:19:"tickets_prop_thread";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:9:"threadUrl";a:7:{s:4:"name";s:9:"threadUrl";s:4:"desc";s:22:"tickets_prop_threadUrl";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:14:"tplCommentAuth";a:7:{s:4:"name";s:14:"tplCommentAuth";s:4:"desc";s:27:"tickets_prop_tplCommentAuth";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:28:"tpl.Tickets.comment.one.auth";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:17:"tplCommentDeleted";a:7:{s:4:"name";s:17:"tplCommentDeleted";s:4:"desc";s:30:"tickets_prop_tplCommentDeleted";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:31:"tpl.Tickets.comment.one.deleted";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:18:"tplCommentEmailBcc";a:7:{s:4:"name";s:18:"tplCommentEmailBcc";s:4:"desc";s:31:"tickets_prop_tplCommentEmailBcc";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:29:"tpl.Tickets.comment.email.bcc";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:20:"tplCommentEmailOwner";a:7:{s:4:"name";s:20:"tplCommentEmailOwner";s:4:"desc";s:33:"tickets_prop_tplCommentEmailOwner";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:31:"tpl.Tickets.comment.email.owner";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:20:"tplCommentEmailReply";a:7:{s:4:"name";s:20:"tplCommentEmailReply";s:4:"desc";s:33:"tickets_prop_tplCommentEmailReply";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:31:"tpl.Tickets.comment.email.reply";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:27:"tplCommentEmailSubscription";a:7:{s:4:"name";s:27:"tplCommentEmailSubscription";s:4:"desc";s:40:"tickets_prop_tplCommentEmailSubscription";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:38:"tpl.Tickets.comment.email.subscription";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:26:"tplCommentEmailUnpublished";a:7:{s:4:"name";s:26:"tplCommentEmailUnpublished";s:4:"desc";s:39:"tickets_prop_tplCommentEmailUnpublished";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:37:"tpl.Tickets.comment.email.unpublished";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:14:"tplCommentForm";a:7:{s:4:"name";s:14:"tplCommentForm";s:4:"desc";s:27:"tickets_prop_tplCommentForm";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:24:"tpl.Tickets.comment.form";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:19:"tplCommentFormGuest";a:7:{s:4:"name";s:19:"tplCommentFormGuest";s:4:"desc";s:32:"tickets_prop_tplCommentFormGuest";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:30:"tpl.Tickets.comment.form.guest";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:15:"tplCommentGuest";a:7:{s:4:"name";s:15:"tplCommentGuest";s:4:"desc";s:28:"tickets_prop_tplCommentGuest";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:29:"tpl.Tickets.comment.one.guest";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:11:"tplComments";a:7:{s:4:"name";s:11:"tplComments";s:4:"desc";s:24:"tickets_prop_tplComments";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:27:"tpl.Tickets.comment.wrapper";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:17:"tplLoginToComment";a:7:{s:4:"name";s:17:"tplLoginToComment";s:4:"desc";s:30:"tickets_prop_tplLoginToComment";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:25:"tpl.Tickets.comment.login";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}}',
      'moduleguid' => '',
      'static' => 0,
      'static_file' => 'core/components/tickets/elements/snippets/snippet.comments.php',
      'content' => '/** @var array $scriptProperties */
if (empty($thread)) {
	$scriptProperties[\'thread\'] = $modx->getOption(\'thread\', $scriptProperties, \'resource-\' . $modx->resource->id, true);
}
$scriptProperties[\'resource\'] = $modx->resource->get(\'id\');
$scriptProperties[\'snippetPrepareComment\'] = $modx->getOption(\'tickets.snippet_prepare_comment\');
$scriptProperties[\'commentEditTime\'] = $modx->getOption(\'tickets.comment_edit_time\', null, 180);

$depth = $modx->getOption(\'depth\', $scriptProperties, 0);
$tplComments = $modx->getOption(\'tplComments\', $scriptProperties, \'tpl.Tickets.comment.wrapper\');
$tplCommentForm = $modx->getOption(\'tplCommentForm\', $scriptProperties, \'tpl.Tickets.comment.form\');
$tplCommentFormGuest = $modx->getOption(\'tplCommentFormGuest\', $scriptProperties, \'tpl.Tickets.comment.form.guest\');
$tplCommentAuth = $modx->getOption(\'tplCommentAuth\', $scriptProperties, \'tpl.Tickets.comment.one.auth\');
$tplCommentGuest = $modx->getOption(\'tplCommentGuest\', $scriptProperties, \'tpl.Tickets.comment.one.guest\');
$tplLoginToComment = $modx->getOption(\'tplLoginToComment\', $scriptProperties, \'tpl.Tickets.comment.login\');
$outputSeparator = $modx->getOption(\'outputSeparator\', $scriptProperties, "\\n");

/** @var Tickets $Tickets */
$Tickets = $modx->getService(\'tickets\', \'Tickets\', $modx->getOption(\'tickets.core_path\', null, $modx->getOption(\'core_path\') . \'components/tickets/\') . \'model/tickets/\', $scriptProperties);
$Tickets->initialize($modx->context->key, $scriptProperties);

/** @var pdoFetch $pdoFetch */
$pdoFetch = $modx->getService(\'pdoFetch\');
$pdoFetch->setConfig($scriptProperties);
$pdoFetch->addTime(\'pdoTools loaded\');

// Prepare Ticket Thread
/** @var TicketThread $thread */
if (!$thread = $modx->getObject(\'TicketThread\', array(\'name\' => $scriptProperties[\'thread\']))) {
	$thread = $modx->newObject(\'TicketThread\');
	$thread->fromArray(array(
		\'name\' => $scriptProperties[\'thread\'],
		\'resource\' => $modx->resource->get(\'id\'),
		\'createdby\' => $modx->user->id,
		\'createdon\' => date(\'Y-m-d H:i:s\'),
		\'subscribers\' => array($modx->resource->get(\'createdby\')),
	));
}
elseif ($thread->get(\'deleted\')) {
	return $modx->lexicon(\'ticket_thread_err_deleted\');
}
// Prepare session for guests
if (!empty($allowGuest) && !isset($_SESSION[\'TicketComments\'])) {
	$_SESSION[\'TicketComments\'] = array(\'name\' => \'\', \'email\' => \'\', \'ids\' => array());
}

// Migrate authors to subscription system
if (!is_array($thread->get(\'subscribers\'))) {
	$thread->set(\'subscribers\', array($modx->resource->get(\'createdby\')));
}
$thread->set(\'resource\', $modx->resource->get(\'id\'));
$thread->set(\'properties\', $scriptProperties);
$thread->save();

// Prepare query to db
$class = \'TicketComment\';
$where = array();
if (empty($showUnpublished)) {
	$where[\'published\'] = 1;
}

// Joining tables
$innerJoin = array(
	\'Thread\' => array(
		\'class\' => \'TicketThread\',
		\'on\' => \'`Thread`.`id` = `TicketComment`.`thread` AND `Thread`.`name` = "\' . $thread->get(\'name\') . \'"\'
	)
);
$leftJoin = array(
	\'User\' => array(\'class\' => \'modUser\', \'on\' => \'`User`.`id` = `TicketComment`.`createdby`\'),
	\'Profile\' => array(\'class\' => \'modUserProfile\', \'on\' => \'`Profile`.`internalKey` = `TicketComment`.`createdby`\'),
);
if ($Tickets->authenticated) {
	$leftJoin[\'Vote\'] = array(
		\'class\' => \'TicketVote\',
		\'on\' => \'`Vote`.`id` = `TicketComment`.`id` AND `Vote`.`class` = "TicketComment" AND `Vote`.`createdby` = \' . $modx->user->id
	);
	$leftJoin[\'Star\'] = array(
		\'class\' => \'TicketStar\',
		\'on\' => \'`Star`.`id` = `TicketComment`.`id` AND `Star`.`class` = "TicketComment" AND `Star`.`createdby` = \' . $modx->user->id
	);
}
// Fields to select
$select = array(
	\'TicketComment\' => $modx->getSelectColumns(\'TicketComment\', \'TicketComment\', \'\', array(\'raw\'), true) . \', `parent` as `new_parent`, `rating` as `rating_total`\',
	\'Thread\' => \'`Thread`.`resource`\',
	\'User\' => \'`User`.`username`\',
	\'Profile\' => $modx->getSelectColumns(\'modUserProfile\', \'Profile\', \'\', array(\'id\', \'email\'), true) . \',`Profile`.`email` as `user_email`\',
);
if ($Tickets->authenticated) {
	$select[\'Vote\'] = \'`Vote`.`value` as `vote`\';
	$select[\'Star\'] = \'COUNT(`Star`.`id`) as `star`\';
}

// Add custom parameters
foreach (array(\'where\', \'select\', \'leftJoin\', \'innerJoin\') as $v) {
	if (!empty($scriptProperties[$v])) {
		$tmp = $modx->fromJSON($scriptProperties[$v]);
		if (is_array($tmp)) {
			$$v = array_merge($$v, $tmp);
		}
	}
	unset($scriptProperties[$v]);
}
$pdoFetch->addTime(\'Conditions prepared\');

$default = array(
	\'class\' => $class,
	\'where\' => $modx->toJSON($where),
	\'innerJoin\' => $modx->toJSON($innerJoin),
	\'leftJoin\' => $modx->toJSON($leftJoin),
	\'select\' => $modx->toJSON($select),
	\'sortby\' => $class . \'.id\',
	\'sortdir\' => \'ASC\',
	\'groupby\' => $class . \'.id\',
	\'limit\' => 0,
	\'fastMode\' => true,
	\'return\' => \'data\',
	\'nestedChunkPrefix\' => \'tickets_\',
);

// Merge all properties and run!
$pdoFetch->setConfig(array_merge($default, $scriptProperties), false);
$pdoFetch->addTime(\'Query parameters prepared.\');
$rows = $pdoFetch->run();

// Processing rows
$output = $commentsThread = null;
if (!empty($rows) && is_array($rows)) {
	$tmp = array();
	$i = 1;
	foreach ($rows as $row) {
		$row[\'idx\'] = $i++;
		$tmp[$row[\'id\']] = $row;
	}
	$rows = $thread->buildTree($tmp, $depth);
	unset($tmp, $i);

	if (!empty($formBefore)) {
		$rows = array_reverse($rows);
	}

	$tpl = !$thread->get(\'closed\') && ($Tickets->authenticated || !empty($allowGuest))
		? $tplCommentAuth
		: $tplCommentGuest;
	foreach ($rows as $row) {
		$output[] = $Tickets->templateNode($row, $tpl);
	}

	$pdoFetch->addTime(\'Returning processed chunks\');
	$output = implode($outputSeparator, $output);
}

$commentsThread = $pdoFetch->getChunk($tplComments, array(
	\'total\' => $modx->getPlaceholder($pdoFetch->config[\'totalVar\']),
	\'comments\' => $output,
	\'subscribed\' => $thread->isSubscribed(),
));

$pls = array(\'thread\' => $scriptProperties[\'thread\']);
if (!$Tickets->authenticated && empty($allowGuest)) {
	$form = $pdoFetch->getChunk($tplLoginToComment);
}
elseif (!$Tickets->authenticated) {
	$pls[\'name\'] = $_SESSION[\'TicketComments\'][\'name\'];
	$pls[\'email\'] = $_SESSION[\'TicketComments\'][\'email\'];
	if (!empty($enableCaptcha)) {
		$tmp = $Tickets->getCaptcha();
		$pls[\'captcha\'] = $modx->lexicon(\'ticket_comment_captcha\', $tmp);
	}
	$form = $pdoFetch->getChunk($tplCommentFormGuest, $pls);
}
else {
	$form = $pdoFetch->getChunk($tplCommentForm, $pls);
}

$commentForm = $thread->get(\'closed\')
	? $modx->lexicon(\'ticket_thread_err_closed\')
	: $form;
$output = !empty($formBefore)
	? $commentForm . $commentsThread
	: $commentsThread . $commentForm;

if ($modx->user->hasSessionContext(\'mgr\') && !empty($showLog)) {
	$output .= \'<pre class="CommentsLog">\' . print_r($pdoFetch->getTime(), 1) . \'</pre>\';
}

$modx->regClientStartupScript(\'<script type="text/javascript">TicketsConfig.formBefore = \' . (int)!empty($formBefore) . \';TicketsConfig.thread_depth = \' . (int)$depth . \';</script>\', true);

// Return output
if (!empty($toPlaceholder)) {
	$modx->setPlaceholder($toPlaceholder, $output);
}
else {
	return $output;
}',
    ),
  ),
  '61a2300ad81508581bfd724fa6cc35aa' => 
  array (
    'criteria' => 
    array (
      'name' => 'TicketLatest',
    ),
    'object' => 
    array (
      'id' => 51,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'TicketLatest',
      'description' => '',
      'editor_type' => 0,
      'category' => 12,
      'cache_type' => 0,
      'snippet' => '/* @var array $scriptProperties */
if (!empty($cacheKey) && $output = $modx->cacheManager->get(\'tickets/latest.\' . $cacheKey)) {
	return $output;
}

/* @var Tickets $Tickets */
$Tickets = $modx->getService(\'tickets\', \'Tickets\', $modx->getOption(\'tickets.core_path\', null, $modx->getOption(\'core_path\') . \'components/tickets/\') . \'model/tickets/\', $scriptProperties);
$Tickets->initialize($modx->context->key, $scriptProperties);

/** @var pdoFetch $pdoFetch */
$pdoFetch = $modx->getService(\'pdoFetch\');
$pdoFetch->setConfig($scriptProperties);
$pdoFetch->addTime(\'pdoTools loaded\');

if (empty($action)) {
	$action = \'comments\';
}
if ($action == \'tickets\' && $scriptProperties[\'tpl\'] == \'tpl.Tickets.comment.latest\') {
	$scriptProperties[\'tpl\'] = \'tpl.Tickets.ticket.latest\';
}
$action = strtolower($action);
$where = $action == \'tickets\'
	? array(\'class_key\' => \'Ticket\')
	: array();

if (empty($showUnpublished)) {
	$where[\'Ticket.published\'] = 1;
}
if (empty($showHidden)) {
	$where[\'Ticket.hidemenu\'] = 0;
}
if (empty($showDeleted)) {
	$where[\'Ticket.deleted\'] = 0;
}
if (!isset($cacheTime)) {
	$cacheTime = 1800;
}
if (!empty($user)) {
	$user = array_map(\'trim\', explode(\',\', $user));
	$user_id = $user_username = array();
	foreach ($user as $v) {
		if (is_numeric($v)) {
			$user_id[] = $v;
		}
		else {
			$user_username[] = $v;
		}
	}
	if (!empty($user_id) && !empty($user_username)) {
		$where[] = \'(`User`.`id` IN (\' . implode(\',\', $user_id) . \') OR `User`.`username` IN (\\\'\' . implode(\'\\\',\\\'\', $user_username) . \'\\\'))\';
	}
	else {
		if (!empty($user_id)) {
			$where[\'User.id:IN\'] = $user_id;
		}
		else {
			if (!empty($user_username)) {
				$where[\'User.username:IN\'] = $user_username;
			}
		}
	}
}

// Filter by ids
if (!empty($resources)) {
	$resources = array_map(\'trim\', explode(\',\', $resources));
	$in = $out = array();
	foreach ($resources as $v) {
		if (!is_numeric($v)) {
			continue;
		}
		if ($v < 0) {
			$out[] = abs($v);
		}
		else {
			$in[] = $v;
		}
	}
	if (!empty($in)) {
		$where[\'id:IN\'] = $in;
	}
	if (!empty($out)) {
		$where[\'id:NOT IN\'] = $out;
	}
}
// Filter by parents
else {
	if (!empty($parents) && $parents > 0) {
		$pids = array_map(\'trim\', explode(\',\', $parents));
		$parents = $pids;
		if (!empty($depth) && $depth > 0) {
			foreach ($pids as $v) {
				if (!is_numeric($v)) {
					continue;
				}
				$parents = array_merge($parents, $modx->getChildIds($v, $depth));
			}
		}
		if (!empty($parents)) {
			$where[\'Ticket.parent:IN\'] = $parents;
		}
	}
}

// Joining tables
if ($action == \'comments\') {
	$class = \'TicketComment\';

	$innerJoin = array();
	$innerJoin[\'Thread\'] = empty($user)
		? array(\'class\' => \'TicketThread\', \'on\' => \'`TicketComment`.`id` = `Thread`.`comment_last` AND `Thread`.`deleted` = 0\')
		: array(\'class\' => \'TicketThread\', \'on\' => \'`TicketComment`.`thread` = `Thread`.`id` AND `Thread`.`deleted` = 0\');
	$innerJoin[\'Ticket\'] = array(\'class\' => \'Ticket\', \'on\' => \'`Ticket`.`id` = `Thread`.`resource`\');

	$leftJoin = array(
		\'Section\' => array(\'class\' => \'TicketsSection\', \'on\' => \'`Section`.`id` = `Ticket`.`parent`\'),
		\'User\' => array(\'class\' => \'modUser\', \'on\' => \'`User`.`id` = `TicketComment`.`createdby`\'),
		\'Profile\' => array(\'class\' => \'modUserProfile\', \'on\' => \'`Profile`.`internalKey` = `TicketComment`.`createdby`\'),
	);

	$select = array(
		\'TicketComment\' => !empty($includeContent)
			? $modx->getSelectColumns(\'TicketComment\', \'TicketComment\', \'\', array(\'raw\'), true)
			: $modx->getSelectColumns(\'TicketComment\', \'TicketComment\', \'\', array(\'text\', \'raw\'), true),
		\'Ticket\' => !empty($includeContent)
			? $modx->getSelectColumns(\'Ticket\', \'Ticket\', \'ticket.\')
			: $modx->getSelectColumns(\'Ticket\', \'Ticket\', \'ticket.\', array(\'content\'), true)
	);
	$groupby = empty($user)
		? \'`Ticket`.`id`\'
		: \'`TicketComment`.`id`\';
	$where[\'TicketComment.deleted\'] = 0;
}
elseif ($action == \'tickets\') {
	$class = \'Ticket\';

	$innerJoin = array();
	$leftJoin = array(
		\'Thread\' => array(\'class\' => \'TicketThread\', \'on\' => \'`Thread`.`resource` = `Ticket`.`id` AND `Thread`.`deleted` = 0\'),
		\'Section\' => array(\'class\' => \'TicketsSection\', \'on\' => \'`Section`.`id` = `Ticket`.`parent`\'),
		\'User\' => array(\'class\' => \'modUser\', \'on\' => \'`User`.`id` = `Ticket`.`createdby`\'),
		\'Profile\' => array(\'class\' => \'modUserProfile\', \'on\' => \'`Profile`.`internalKey` = `Ticket`.`createdby`\'),
	);

	$select = array(
		\'Ticket\' => !empty($includeContent)
			? $modx->getSelectColumns(\'Ticket\', \'Ticket\')
			: $modx->getSelectColumns(\'Ticket\', \'Ticket\', \'\', array(\'content\'), true),
		\'Thread\' => \'`Thread`.`id` as `thread`\'
	);
	$groupby = \'`Ticket`.`id`\';
}
else {
	return \'Wrong action. You must use "ticket" or "comment".\';
}

// Fields to select
$select = array_merge($select, array(
	\'Section\' => $modx->getSelectColumns(\'TicketsSection\', \'Section\', \'section.\', array(\'content\'), true),
	\'User\' => $modx->getSelectColumns(\'modUser\', \'User\', \'\', array(\'username\')),
	\'Profile\' => $modx->getSelectColumns(\'modUserProfile\', \'Profile\', \'\', array(\'id\'), true),
));

// Add custom parameters
foreach (array(\'where\', \'select\', \'leftJoin\', \'innerJoin\') as $v) {
	if (!empty($scriptProperties[$v])) {
		$tmp = $modx->fromJSON($scriptProperties[$v]);
		if (is_array($tmp)) {
			$$v = array_merge($$v, $tmp);
		}
	}
	unset($scriptProperties[$v]);
}

$default = array(
	\'class\' => $class,
	\'where\' => $modx->toJSON($where),
	\'innerJoin\' => $modx->toJSON($innerJoin),
	\'leftJoin\' => $modx->toJSON($leftJoin),
	\'select\' => $modx->toJSON($select),
	\'sortby\' => \'createdon\',
	\'sortdir\' => \'DESC\',
	\'groupby\' => $groupby,
	\'return\' => \'data\',
	\'nestedChunkPrefix\' => \'tickets_\',
);

// Merge all properties and run!
$pdoFetch->setConfig(array_merge($default, $scriptProperties));
$pdoFetch->addTime(\'Query parameters are prepared.\');
$rows = $pdoFetch->run();

// Processing rows
$output = array();
if (!empty($rows) && is_array($rows)) {
	foreach ($rows as $k => $row) {
		// Processing main fields
		$row[\'comments\'] = $modx->getCount(\'TicketComment\', array(\'thread\' => $row[\'thread\'], \'published\' => 1));

		// Prepare row
		if ($class == \'Ticket\') {
			$row[\'date_ago\'] = $Tickets->dateFormat($row[\'createdon\']);
			$properties = is_string($row[\'properties\'])
				? $modx->fromJSON($row[\'properties\'])
				: $row[\'properties\'];
			if (empty($properties[\'process_tags\'])) {
				foreach ($row as $field => $value) {
					$row[$field] = str_replace(
						array(\'[\', \']\', \'`\', \'{\', \'}\'),
						array(\'&#91;\', \'&#93;\', \'&#96;\', \'&#123;\', \'&#125;\'),
						$value
					);
				}
			}
		}
		else {

			if (empty($row[\'createdby\'])) {
				$row[\'fullname\'] = $row[\'name\'];
				$row[\'guest\'] = 1;
			}
			$row[\'resource\'] = $row[\'ticket.id\'];
			$row = $Tickets->prepareComment($row);
		}

		// Processing chunk
		$row[\'idx\'] = $pdoFetch->idx++;
		$tpl = $pdoFetch->defineChunk($row);
		$output[] = !empty($tpl)
			? $pdoFetch->getChunk($tpl, $row, $pdoFetch->config[\'fastMode\'])
			: $pdoFetch->getChunk(\'\', $row);
	}
	$pdoFetch->addTime(\'Returning processed chunks\');
}
if (empty($outputSeparator)) {
	$outputSeparator = "\\n";
}
$output = implode($outputSeparator, $output);

if (!empty($cacheKey)) {
	$modx->cacheManager->set(\'tickets/latest.\' . $cacheKey, $output, $cacheTime);
}

if ($modx->user->hasSessionContext(\'mgr\') && !empty($showLog)) {
	$output .= \'<pre class="TicketLatestLog">\' . print_r($pdoFetch->getTime(), 1) . \'</pre>\';
}

if (!empty($toPlaceholder)) {
	$modx->setPlaceholder($toPlaceholder, $output);
}
else {
	return $output;
}',
      'locked' => 0,
      'properties' => 'a:23:{s:6:"action";a:7:{s:4:"name";s:6:"action";s:4:"desc";s:19:"tickets_prop_action";s:4:"type";s:4:"list";s:7:"options";a:2:{i:0;a:2:{s:4:"text";s:8:"Comments";s:5:"value";s:8:"comments";}i:1;a:2:{s:4:"text";s:7:"Tickets";s:5:"value";s:7:"tickets";}}s:5:"value";s:8:"comments";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:3:"tpl";a:7:{s:4:"name";s:3:"tpl";s:4:"desc";s:16:"tickets_prop_tpl";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:26:"tpl.Tickets.comment.latest";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:5:"limit";a:7:{s:4:"name";s:5:"limit";s:4:"desc";s:18:"tickets_prop_limit";s:4:"type";s:11:"numberfield";s:7:"options";a:0:{}s:5:"value";i:10;s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:6:"offset";a:7:{s:4:"name";s:6:"offset";s:4:"desc";s:19:"tickets_prop_offset";s:4:"type";s:11:"numberfield";s:7:"options";a:0:{}s:5:"value";i:0;s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:5:"depth";a:7:{s:4:"name";s:5:"depth";s:4:"desc";s:18:"tickets_prop_depth";s:4:"type";s:11:"numberfield";s:7:"options";a:0:{}s:5:"value";i:10;s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:7:"parents";a:7:{s:4:"name";s:7:"parents";s:4:"desc";s:20:"tickets_prop_parents";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:9:"resources";a:7:{s:4:"name";s:9:"resources";s:4:"desc";s:22:"tickets_prop_resources";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:6:"sortby";a:7:{s:4:"name";s:6:"sortby";s:4:"desc";s:19:"tickets_prop_sortby";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:9:"createdon";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:7:"sortdir";a:7:{s:4:"name";s:7:"sortdir";s:4:"desc";s:20:"tickets_prop_sortdir";s:4:"type";s:4:"list";s:7:"options";a:2:{i:0;a:2:{s:4:"text";s:3:"ASC";s:5:"value";s:3:"ASC";}i:1;a:2:{s:4:"text";s:4:"DESC";s:5:"value";s:4:"DESC";}}s:5:"value";s:4:"DESC";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:14:"includeContent";a:7:{s:4:"name";s:14:"includeContent";s:4:"desc";s:27:"tickets_prop_includeContent";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:0;s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:13:"toPlaceholder";a:7:{s:4:"name";s:13:"toPlaceholder";s:4:"desc";s:26:"tickets_prop_toPlaceholder";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:10:"includeTVs";a:7:{s:4:"name";s:10:"includeTVs";s:4:"desc";s:23:"tickets_prop_includeTVs";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:5:"where";a:7:{s:4:"name";s:5:"where";s:4:"desc";s:18:"tickets_prop_where";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:8:"tvPrefix";a:7:{s:4:"name";s:8:"tvPrefix";s:4:"desc";s:21:"tickets_prop_tvPrefix";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:15:"outputSeparator";a:7:{s:4:"name";s:15:"outputSeparator";s:4:"desc";s:28:"tickets_prop_outputSeparator";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:1:"
";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:7:"showLog";a:7:{s:4:"name";s:7:"showLog";s:4:"desc";s:20:"tickets_prop_showLog";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:0;s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:8:"fastMode";a:7:{s:4:"name";s:8:"fastMode";s:4:"desc";s:21:"tickets_prop_fastMode";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:0;s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:15:"showUnpublished";a:7:{s:4:"name";s:15:"showUnpublished";s:4:"desc";s:28:"tickets_prop_showUnpublished";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:0;s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:11:"showDeleted";a:7:{s:4:"name";s:11:"showDeleted";s:4:"desc";s:24:"tickets_prop_showDeleted";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:0;s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:10:"showHidden";a:7:{s:4:"name";s:10:"showHidden";s:4:"desc";s:23:"tickets_prop_showHidden";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:1;s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:4:"user";a:7:{s:4:"name";s:4:"user";s:4:"desc";s:17:"tickets_prop_user";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:8:"cacheKey";a:7:{s:4:"name";s:8:"cacheKey";s:4:"desc";s:21:"tickets_prop_cacheKey";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:9:"cacheTime";a:7:{s:4:"name";s:9:"cacheTime";s:4:"desc";s:22:"tickets_prop_cacheTime";s:4:"type";s:11:"numberfield";s:7:"options";a:0:{}s:5:"value";i:1800;s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}}',
      'moduleguid' => '',
      'static' => 0,
      'static_file' => 'core/components/tickets/elements/snippets/snippet.ticket_latest.php',
      'content' => '/* @var array $scriptProperties */
if (!empty($cacheKey) && $output = $modx->cacheManager->get(\'tickets/latest.\' . $cacheKey)) {
	return $output;
}

/* @var Tickets $Tickets */
$Tickets = $modx->getService(\'tickets\', \'Tickets\', $modx->getOption(\'tickets.core_path\', null, $modx->getOption(\'core_path\') . \'components/tickets/\') . \'model/tickets/\', $scriptProperties);
$Tickets->initialize($modx->context->key, $scriptProperties);

/** @var pdoFetch $pdoFetch */
$pdoFetch = $modx->getService(\'pdoFetch\');
$pdoFetch->setConfig($scriptProperties);
$pdoFetch->addTime(\'pdoTools loaded\');

if (empty($action)) {
	$action = \'comments\';
}
if ($action == \'tickets\' && $scriptProperties[\'tpl\'] == \'tpl.Tickets.comment.latest\') {
	$scriptProperties[\'tpl\'] = \'tpl.Tickets.ticket.latest\';
}
$action = strtolower($action);
$where = $action == \'tickets\'
	? array(\'class_key\' => \'Ticket\')
	: array();

if (empty($showUnpublished)) {
	$where[\'Ticket.published\'] = 1;
}
if (empty($showHidden)) {
	$where[\'Ticket.hidemenu\'] = 0;
}
if (empty($showDeleted)) {
	$where[\'Ticket.deleted\'] = 0;
}
if (!isset($cacheTime)) {
	$cacheTime = 1800;
}
if (!empty($user)) {
	$user = array_map(\'trim\', explode(\',\', $user));
	$user_id = $user_username = array();
	foreach ($user as $v) {
		if (is_numeric($v)) {
			$user_id[] = $v;
		}
		else {
			$user_username[] = $v;
		}
	}
	if (!empty($user_id) && !empty($user_username)) {
		$where[] = \'(`User`.`id` IN (\' . implode(\',\', $user_id) . \') OR `User`.`username` IN (\\\'\' . implode(\'\\\',\\\'\', $user_username) . \'\\\'))\';
	}
	else {
		if (!empty($user_id)) {
			$where[\'User.id:IN\'] = $user_id;
		}
		else {
			if (!empty($user_username)) {
				$where[\'User.username:IN\'] = $user_username;
			}
		}
	}
}

// Filter by ids
if (!empty($resources)) {
	$resources = array_map(\'trim\', explode(\',\', $resources));
	$in = $out = array();
	foreach ($resources as $v) {
		if (!is_numeric($v)) {
			continue;
		}
		if ($v < 0) {
			$out[] = abs($v);
		}
		else {
			$in[] = $v;
		}
	}
	if (!empty($in)) {
		$where[\'id:IN\'] = $in;
	}
	if (!empty($out)) {
		$where[\'id:NOT IN\'] = $out;
	}
}
// Filter by parents
else {
	if (!empty($parents) && $parents > 0) {
		$pids = array_map(\'trim\', explode(\',\', $parents));
		$parents = $pids;
		if (!empty($depth) && $depth > 0) {
			foreach ($pids as $v) {
				if (!is_numeric($v)) {
					continue;
				}
				$parents = array_merge($parents, $modx->getChildIds($v, $depth));
			}
		}
		if (!empty($parents)) {
			$where[\'Ticket.parent:IN\'] = $parents;
		}
	}
}

// Joining tables
if ($action == \'comments\') {
	$class = \'TicketComment\';

	$innerJoin = array();
	$innerJoin[\'Thread\'] = empty($user)
		? array(\'class\' => \'TicketThread\', \'on\' => \'`TicketComment`.`id` = `Thread`.`comment_last` AND `Thread`.`deleted` = 0\')
		: array(\'class\' => \'TicketThread\', \'on\' => \'`TicketComment`.`thread` = `Thread`.`id` AND `Thread`.`deleted` = 0\');
	$innerJoin[\'Ticket\'] = array(\'class\' => \'Ticket\', \'on\' => \'`Ticket`.`id` = `Thread`.`resource`\');

	$leftJoin = array(
		\'Section\' => array(\'class\' => \'TicketsSection\', \'on\' => \'`Section`.`id` = `Ticket`.`parent`\'),
		\'User\' => array(\'class\' => \'modUser\', \'on\' => \'`User`.`id` = `TicketComment`.`createdby`\'),
		\'Profile\' => array(\'class\' => \'modUserProfile\', \'on\' => \'`Profile`.`internalKey` = `TicketComment`.`createdby`\'),
	);

	$select = array(
		\'TicketComment\' => !empty($includeContent)
			? $modx->getSelectColumns(\'TicketComment\', \'TicketComment\', \'\', array(\'raw\'), true)
			: $modx->getSelectColumns(\'TicketComment\', \'TicketComment\', \'\', array(\'text\', \'raw\'), true),
		\'Ticket\' => !empty($includeContent)
			? $modx->getSelectColumns(\'Ticket\', \'Ticket\', \'ticket.\')
			: $modx->getSelectColumns(\'Ticket\', \'Ticket\', \'ticket.\', array(\'content\'), true)
	);
	$groupby = empty($user)
		? \'`Ticket`.`id`\'
		: \'`TicketComment`.`id`\';
	$where[\'TicketComment.deleted\'] = 0;
}
elseif ($action == \'tickets\') {
	$class = \'Ticket\';

	$innerJoin = array();
	$leftJoin = array(
		\'Thread\' => array(\'class\' => \'TicketThread\', \'on\' => \'`Thread`.`resource` = `Ticket`.`id` AND `Thread`.`deleted` = 0\'),
		\'Section\' => array(\'class\' => \'TicketsSection\', \'on\' => \'`Section`.`id` = `Ticket`.`parent`\'),
		\'User\' => array(\'class\' => \'modUser\', \'on\' => \'`User`.`id` = `Ticket`.`createdby`\'),
		\'Profile\' => array(\'class\' => \'modUserProfile\', \'on\' => \'`Profile`.`internalKey` = `Ticket`.`createdby`\'),
	);

	$select = array(
		\'Ticket\' => !empty($includeContent)
			? $modx->getSelectColumns(\'Ticket\', \'Ticket\')
			: $modx->getSelectColumns(\'Ticket\', \'Ticket\', \'\', array(\'content\'), true),
		\'Thread\' => \'`Thread`.`id` as `thread`\'
	);
	$groupby = \'`Ticket`.`id`\';
}
else {
	return \'Wrong action. You must use "ticket" or "comment".\';
}

// Fields to select
$select = array_merge($select, array(
	\'Section\' => $modx->getSelectColumns(\'TicketsSection\', \'Section\', \'section.\', array(\'content\'), true),
	\'User\' => $modx->getSelectColumns(\'modUser\', \'User\', \'\', array(\'username\')),
	\'Profile\' => $modx->getSelectColumns(\'modUserProfile\', \'Profile\', \'\', array(\'id\'), true),
));

// Add custom parameters
foreach (array(\'where\', \'select\', \'leftJoin\', \'innerJoin\') as $v) {
	if (!empty($scriptProperties[$v])) {
		$tmp = $modx->fromJSON($scriptProperties[$v]);
		if (is_array($tmp)) {
			$$v = array_merge($$v, $tmp);
		}
	}
	unset($scriptProperties[$v]);
}

$default = array(
	\'class\' => $class,
	\'where\' => $modx->toJSON($where),
	\'innerJoin\' => $modx->toJSON($innerJoin),
	\'leftJoin\' => $modx->toJSON($leftJoin),
	\'select\' => $modx->toJSON($select),
	\'sortby\' => \'createdon\',
	\'sortdir\' => \'DESC\',
	\'groupby\' => $groupby,
	\'return\' => \'data\',
	\'nestedChunkPrefix\' => \'tickets_\',
);

// Merge all properties and run!
$pdoFetch->setConfig(array_merge($default, $scriptProperties));
$pdoFetch->addTime(\'Query parameters are prepared.\');
$rows = $pdoFetch->run();

// Processing rows
$output = array();
if (!empty($rows) && is_array($rows)) {
	foreach ($rows as $k => $row) {
		// Processing main fields
		$row[\'comments\'] = $modx->getCount(\'TicketComment\', array(\'thread\' => $row[\'thread\'], \'published\' => 1));

		// Prepare row
		if ($class == \'Ticket\') {
			$row[\'date_ago\'] = $Tickets->dateFormat($row[\'createdon\']);
			$properties = is_string($row[\'properties\'])
				? $modx->fromJSON($row[\'properties\'])
				: $row[\'properties\'];
			if (empty($properties[\'process_tags\'])) {
				foreach ($row as $field => $value) {
					$row[$field] = str_replace(
						array(\'[\', \']\', \'`\', \'{\', \'}\'),
						array(\'&#91;\', \'&#93;\', \'&#96;\', \'&#123;\', \'&#125;\'),
						$value
					);
				}
			}
		}
		else {

			if (empty($row[\'createdby\'])) {
				$row[\'fullname\'] = $row[\'name\'];
				$row[\'guest\'] = 1;
			}
			$row[\'resource\'] = $row[\'ticket.id\'];
			$row = $Tickets->prepareComment($row);
		}

		// Processing chunk
		$row[\'idx\'] = $pdoFetch->idx++;
		$tpl = $pdoFetch->defineChunk($row);
		$output[] = !empty($tpl)
			? $pdoFetch->getChunk($tpl, $row, $pdoFetch->config[\'fastMode\'])
			: $pdoFetch->getChunk(\'\', $row);
	}
	$pdoFetch->addTime(\'Returning processed chunks\');
}
if (empty($outputSeparator)) {
	$outputSeparator = "\\n";
}
$output = implode($outputSeparator, $output);

if (!empty($cacheKey)) {
	$modx->cacheManager->set(\'tickets/latest.\' . $cacheKey, $output, $cacheTime);
}

if ($modx->user->hasSessionContext(\'mgr\') && !empty($showLog)) {
	$output .= \'<pre class="TicketLatestLog">\' . print_r($pdoFetch->getTime(), 1) . \'</pre>\';
}

if (!empty($toPlaceholder)) {
	$modx->setPlaceholder($toPlaceholder, $output);
}
else {
	return $output;
}',
    ),
  ),
  'd832785a685a7bb25465ab91833b1bdf' => 
  array (
    'criteria' => 
    array (
      'name' => 'TicketMeta',
    ),
    'object' => 
    array (
      'id' => 52,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'TicketMeta',
      'description' => '',
      'editor_type' => 0,
      'category' => 12,
      'cache_type' => 0,
      'snippet' => '/* @var array $scriptProperties */
/* @var Tickets $Tickets */
$Tickets = $modx->getService(\'tickets\', \'Tickets\', $modx->getOption(\'tickets.core_path\', null, $modx->getOption(\'core_path\') . \'components/tickets/\') . \'model/tickets/\', $scriptProperties);
$Tickets->initialize($modx->context->key, $scriptProperties);

$scriptProperties[\'nestedChunkPrefix\'] = \'tickets_\';
/** @var pdoFetch $pdoFetch */
$pdoFetch = $modx->getService(\'pdoFetch\');
$pdoFetch->setConfig($scriptProperties);
$pdoFetch->addTime(\'pdoTools loaded\');

if (empty($id)) {
	$id = $modx->resource->id;
}
/** @var Ticket|modResource $ticket */
if (!$ticket = $modx->getObject(\'modResource\', $id)) {
	return \'Could not load resource with id = \' . $id;
}

$class = $ticket instanceof Ticket
	? \'Ticket\'
	: \'modResource\';

$data = $ticket->toArray();
$vote = $pdoFetch->getObject(\'TicketVote\', array(\'id\' => $ticket->id, \'class\' => \'Ticket\', \'createdby\' => $modx->user->id), array(\'select\' => \'value\', \'sortby\' => \'id\'));
if (!empty($vote)) {
	$data[\'vote\'] = $vote[\'value\'];
}

$star = $modx->getCount(\'TicketStar\', array(\'id\' => $ticket->id, \'class\' => \'Ticket\', \'createdby\' => $modx->user->id));
$data[\'stared\'] = !empty($star);
$data[\'unstared\'] = empty($star);

if ($class != \'Ticket\') {
	// Rating
	if (!$modx->user->id || $modx->user->id == $ticket->createdby) {
		$data[\'voted\'] = 0;
	}
	else {
		$q = $modx->newQuery(\'TicketVote\');
		$q->where(array(\'id\' => $ticket->id, \'createdby\' => $modx->user->id, \'class\' => \'Ticket\'));
		$q->select(\'`value`\');
		$tstart = microtime(true);
		if ($q->prepare() && $q->stmt->execute()) {
			$modx->startTime += microtime(true) - $tstart;
			$modx->executedQueries++;
			$voted = $q->stmt->fetchColumn();
			if ($voted > 0) {
				$voted = 1;
			}
			elseif ($voted < 0) {
				$voted = -1;
			}
			$data[\'voted\'] = $voted;
		}
	}
	$data[\'can_vote\'] = $data[\'voted\'] === false && $Tickets->authenticated && $modx->user->id != $ticket->createdby;

	$data = array_merge($ticket->getProperties(\'tickets\'), $data);
	if (!isset($data[\'rating\'])) {
		$data[\'rating\'] = $data[\'rating_total\'] = $data[\'rating_plus\'] = $data[\'rating_minus\'] = 0;
	}

	// Views
	$data[\'views\'] = $modx->getCount(\'TicketView\', array(\'parent\' => $ticket->id));

	// Comments
	$data[\'comments\'] = 0;
	$thread = empty($thread)
		? \'resource-\' . $ticket->id
		: $thread;
	$q = $modx->newQuery(\'TicketThread\', array(\'name\' => $thread));
	$q->leftJoin(\'TicketComment\', \'TicketComment\', "`TicketThread`.`id` = `TicketComment`.`thread` AND `TicketComment`.`published` = 1");
	$q->select(\'COUNT(`TicketComment`.`id`) as `comments`\');
	$tstart = microtime(true);
	if ($q->prepare() && $q->stmt->execute()) {
		$modx->startTime += microtime(true) - $tstart;
		$modx->executedQueries++;
		$data[\'comments\'] = (int)$q->stmt->fetchColumn();
	}

	// Date ago
	$data[\'date_ago\'] = $Tickets->dateFormat($data[\'createdon\']);

	// Stars
	$data[\'stars\'] = $modx->getCount(\'TicketStar\', array(\'id\' => $ticket->id, \'class\' => \'Ticket\'));
}

if ($data[\'rating\'] > 0) {
	$data[\'rating\'] = \'+\' . $data[\'rating\'];
	$data[\'rating_positive\'] = 1;
}
elseif ($data[\'rating\'] < 0) {
	$data[\'rating_negative\'] = 1;
}

if (!$Tickets->authenticated || $modx->user->id == $ticket->createdby) {
	$data[\'cant_vote\'] = 1;
}
elseif (array_key_exists(\'vote\', $data)) {
	if ($data[\'vote\'] == \'\') {
		$data[\'can_vote\'] = 1;
	}
	elseif ($data[\'vote\'] > 0) {
		$data[\'voted_plus\'] = 1;
		$data[\'cant_vote\'] = 1;
	}
	elseif ($data[\'vote\'] < 0) {
		$data[\'voted_minus\'] = 1;
		$data[\'cant_vote\'] = 1;
	}
	else {
		$data[\'voted_none\'] = 1;
		$data[\'cant_vote\'] = 1;
	}
}

$data[\'active\'] = (int)!empty($data[\'can_vote\']);
$data[\'inactive\'] = (int)!empty($data[\'cant_vote\']);

$data[\'can_star\'] = $Tickets->authenticated;

if (!empty($getSection)) {
	$fields = $modx->getFieldMeta(\'modResource\');
	unset($fields[\'content\']);
	$section = $pdoFetch->getObject(\'modResource\', $ticket->parent, array(\'select\' => implode(\',\', array_keys($fields))));
	foreach ($section as $k => $v) {
		$data[\'section.\' . $k] = $v;
	}
}
if (!empty($getUser)) {
	$fields = $modx->getFieldMeta(\'modUserProfile\');
	$user = $pdoFetch->getObject(\'modUserProfile\', array(\'internalKey\' => $ticket->createdby), array(
		\'innerJoin\' => array(
			\'modUser\' => array(\'class\' => \'modUser\', \'on\' => \'`modUserProfile`.`internalKey` = `modUser`.`id`\')
		),
		\'select\' => array(
			\'modUserProfile\' => implode(\',\', array_keys($fields)),
			\'modUser\' => \'username\',
		)
	));
	$data = array_merge($data, $user);
}

if (!empty($getFiles)) {
	$where = array(\'deleted\' => 0, \'class\' => \'Ticket\', \'parent\' => $ticket->id);
	$collection = $pdoFetch->getCollection(\'TicketFile\', $where, array(\'sortby\' => \'createdon\', \'sortdir\' => \'ASC\'));
	$data[\'files\'] = $content = \'\';
	if (!empty($unusedFiles)) {
		$content = $ticket->getContent();
	}
	foreach ($collection as $item) {
		if ($content && strpos($content, $item[\'url\']) !== false) {
			continue;
		}
		$item[\'size\'] = round($item[\'size\'] / 1024, 2);
		$data[\'files\'] .= !empty($tplFile)
			? $Tickets->getChunk($tplFile, $item)
			: $Tickets->getChunk(\'\', $item);
	}
	$data[\'has_files\'] = !empty($data[\'files\']);
}
$data[\'id\'] = $ticket->get(\'id\');

return !empty($tpl)
	? $Tickets->getChunk($tpl, $data)
	: $Tickets->getChunk(\'\', $data);',
      'locked' => 0,
      'properties' => 'a:7:{s:3:"tpl";a:7:{s:4:"name";s:3:"tpl";s:4:"desc";s:21:"tickets_prop_meta_tpl";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:16:"tpl.Tickets.meta";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:7:"tplFile";a:7:{s:4:"name";s:7:"tplFile";s:4:"desc";s:25:"tickets_prop_meta_tplFile";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:21:"tpl.Tickets.meta.file";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:10:"getSection";a:7:{s:4:"name";s:10:"getSection";s:4:"desc";s:23:"tickets_prop_getSection";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:1;s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:7:"getUser";a:7:{s:4:"name";s:7:"getUser";s:4:"desc";s:20:"tickets_prop_getUser";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:1;s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:8:"getFiles";a:7:{s:4:"name";s:8:"getFiles";s:4:"desc";s:21:"tickets_prop_getFiles";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:1;s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:11:"unusedFiles";a:7:{s:4:"name";s:11:"unusedFiles";s:4:"desc";s:24:"tickets_prop_unusedFiles";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:1;s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:6:"thread";a:7:{s:4:"name";s:6:"thread";s:4:"desc";s:19:"tickets_prop_thread";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}}',
      'moduleguid' => '',
      'static' => 0,
      'static_file' => 'core/components/tickets/elements/snippets/snippet.ticket_meta.php',
      'content' => '/* @var array $scriptProperties */
/* @var Tickets $Tickets */
$Tickets = $modx->getService(\'tickets\', \'Tickets\', $modx->getOption(\'tickets.core_path\', null, $modx->getOption(\'core_path\') . \'components/tickets/\') . \'model/tickets/\', $scriptProperties);
$Tickets->initialize($modx->context->key, $scriptProperties);

$scriptProperties[\'nestedChunkPrefix\'] = \'tickets_\';
/** @var pdoFetch $pdoFetch */
$pdoFetch = $modx->getService(\'pdoFetch\');
$pdoFetch->setConfig($scriptProperties);
$pdoFetch->addTime(\'pdoTools loaded\');

if (empty($id)) {
	$id = $modx->resource->id;
}
/** @var Ticket|modResource $ticket */
if (!$ticket = $modx->getObject(\'modResource\', $id)) {
	return \'Could not load resource with id = \' . $id;
}

$class = $ticket instanceof Ticket
	? \'Ticket\'
	: \'modResource\';

$data = $ticket->toArray();
$vote = $pdoFetch->getObject(\'TicketVote\', array(\'id\' => $ticket->id, \'class\' => \'Ticket\', \'createdby\' => $modx->user->id), array(\'select\' => \'value\', \'sortby\' => \'id\'));
if (!empty($vote)) {
	$data[\'vote\'] = $vote[\'value\'];
}

$star = $modx->getCount(\'TicketStar\', array(\'id\' => $ticket->id, \'class\' => \'Ticket\', \'createdby\' => $modx->user->id));
$data[\'stared\'] = !empty($star);
$data[\'unstared\'] = empty($star);

if ($class != \'Ticket\') {
	// Rating
	if (!$modx->user->id || $modx->user->id == $ticket->createdby) {
		$data[\'voted\'] = 0;
	}
	else {
		$q = $modx->newQuery(\'TicketVote\');
		$q->where(array(\'id\' => $ticket->id, \'createdby\' => $modx->user->id, \'class\' => \'Ticket\'));
		$q->select(\'`value`\');
		$tstart = microtime(true);
		if ($q->prepare() && $q->stmt->execute()) {
			$modx->startTime += microtime(true) - $tstart;
			$modx->executedQueries++;
			$voted = $q->stmt->fetchColumn();
			if ($voted > 0) {
				$voted = 1;
			}
			elseif ($voted < 0) {
				$voted = -1;
			}
			$data[\'voted\'] = $voted;
		}
	}
	$data[\'can_vote\'] = $data[\'voted\'] === false && $Tickets->authenticated && $modx->user->id != $ticket->createdby;

	$data = array_merge($ticket->getProperties(\'tickets\'), $data);
	if (!isset($data[\'rating\'])) {
		$data[\'rating\'] = $data[\'rating_total\'] = $data[\'rating_plus\'] = $data[\'rating_minus\'] = 0;
	}

	// Views
	$data[\'views\'] = $modx->getCount(\'TicketView\', array(\'parent\' => $ticket->id));

	// Comments
	$data[\'comments\'] = 0;
	$thread = empty($thread)
		? \'resource-\' . $ticket->id
		: $thread;
	$q = $modx->newQuery(\'TicketThread\', array(\'name\' => $thread));
	$q->leftJoin(\'TicketComment\', \'TicketComment\', "`TicketThread`.`id` = `TicketComment`.`thread` AND `TicketComment`.`published` = 1");
	$q->select(\'COUNT(`TicketComment`.`id`) as `comments`\');
	$tstart = microtime(true);
	if ($q->prepare() && $q->stmt->execute()) {
		$modx->startTime += microtime(true) - $tstart;
		$modx->executedQueries++;
		$data[\'comments\'] = (int)$q->stmt->fetchColumn();
	}

	// Date ago
	$data[\'date_ago\'] = $Tickets->dateFormat($data[\'createdon\']);

	// Stars
	$data[\'stars\'] = $modx->getCount(\'TicketStar\', array(\'id\' => $ticket->id, \'class\' => \'Ticket\'));
}

if ($data[\'rating\'] > 0) {
	$data[\'rating\'] = \'+\' . $data[\'rating\'];
	$data[\'rating_positive\'] = 1;
}
elseif ($data[\'rating\'] < 0) {
	$data[\'rating_negative\'] = 1;
}

if (!$Tickets->authenticated || $modx->user->id == $ticket->createdby) {
	$data[\'cant_vote\'] = 1;
}
elseif (array_key_exists(\'vote\', $data)) {
	if ($data[\'vote\'] == \'\') {
		$data[\'can_vote\'] = 1;
	}
	elseif ($data[\'vote\'] > 0) {
		$data[\'voted_plus\'] = 1;
		$data[\'cant_vote\'] = 1;
	}
	elseif ($data[\'vote\'] < 0) {
		$data[\'voted_minus\'] = 1;
		$data[\'cant_vote\'] = 1;
	}
	else {
		$data[\'voted_none\'] = 1;
		$data[\'cant_vote\'] = 1;
	}
}

$data[\'active\'] = (int)!empty($data[\'can_vote\']);
$data[\'inactive\'] = (int)!empty($data[\'cant_vote\']);

$data[\'can_star\'] = $Tickets->authenticated;

if (!empty($getSection)) {
	$fields = $modx->getFieldMeta(\'modResource\');
	unset($fields[\'content\']);
	$section = $pdoFetch->getObject(\'modResource\', $ticket->parent, array(\'select\' => implode(\',\', array_keys($fields))));
	foreach ($section as $k => $v) {
		$data[\'section.\' . $k] = $v;
	}
}
if (!empty($getUser)) {
	$fields = $modx->getFieldMeta(\'modUserProfile\');
	$user = $pdoFetch->getObject(\'modUserProfile\', array(\'internalKey\' => $ticket->createdby), array(
		\'innerJoin\' => array(
			\'modUser\' => array(\'class\' => \'modUser\', \'on\' => \'`modUserProfile`.`internalKey` = `modUser`.`id`\')
		),
		\'select\' => array(
			\'modUserProfile\' => implode(\',\', array_keys($fields)),
			\'modUser\' => \'username\',
		)
	));
	$data = array_merge($data, $user);
}

if (!empty($getFiles)) {
	$where = array(\'deleted\' => 0, \'class\' => \'Ticket\', \'parent\' => $ticket->id);
	$collection = $pdoFetch->getCollection(\'TicketFile\', $where, array(\'sortby\' => \'createdon\', \'sortdir\' => \'ASC\'));
	$data[\'files\'] = $content = \'\';
	if (!empty($unusedFiles)) {
		$content = $ticket->getContent();
	}
	foreach ($collection as $item) {
		if ($content && strpos($content, $item[\'url\']) !== false) {
			continue;
		}
		$item[\'size\'] = round($item[\'size\'] / 1024, 2);
		$data[\'files\'] .= !empty($tplFile)
			? $Tickets->getChunk($tplFile, $item)
			: $Tickets->getChunk(\'\', $item);
	}
	$data[\'has_files\'] = !empty($data[\'files\']);
}
$data[\'id\'] = $ticket->get(\'id\');

return !empty($tpl)
	? $Tickets->getChunk($tpl, $data)
	: $Tickets->getChunk(\'\', $data);',
    ),
  ),
  '2591cc1f596e81eaa25d2563cc0445c8' => 
  array (
    'criteria' => 
    array (
      'name' => 'getTickets',
    ),
    'object' => 
    array (
      'id' => 53,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'getTickets',
      'description' => '',
      'editor_type' => 0,
      'category' => 12,
      'cache_type' => 0,
      'snippet' => '/* @var array $scriptProperties */
/* @var Tickets $Tickets */
$Tickets = $modx->getService(\'tickets\', \'Tickets\', $modx->getOption(\'tickets.core_path\', null, $modx->getOption(\'core_path\') . \'components/tickets/\') . \'model/tickets/\', $scriptProperties);
$Tickets->initialize($modx->context->key, $scriptProperties);

/** @var pdoFetch $pdoFetch */
$pdoFetch = $modx->getService(\'pdoFetch\');
$pdoFetch->setConfig($scriptProperties);
$pdoFetch->addTime(\'pdoTools loaded\');

if (isset($parents) && $parents === \'\') {
	$scriptProperties[\'parents\'] = $modx->resource->id;
}

$class = \'Ticket\';
$where = array(\'class_key\' => $class);

//Filter by user
if (!empty($user)) {
	$user = array_map(\'trim\', explode(\',\', $user));
	$user_id = $user_username = array();
	foreach ($user as $v) {
		if (is_numeric($v)) {
			$user_id[] = $v;
		}
		else {
			$user_username[] = $v;
		}
	}
	if (!empty($user_id) && !empty($user_username)) {
		$where[] = \'(`User`.`id` IN (\' . implode(\',\', $user_id) . \') OR `User`.`username` IN (\\\'\' . implode(\'\\\',\\\'\', $user_username) . \'\\\'))\';
	}
	else {
		if (!empty($user_id)) {
			$where[\'User.id:IN\'] = $user_id;
		}
		else {
			if (!empty($user_username)) {
				$where[\'User.username:IN\'] = $user_username;
			}
		}
	}
}

// Joining tables
$leftJoin = array(
	\'Section\' => array(\'class\' => \'TicketsSection\', \'on\' => \'`Section`.`id` = `Ticket`.`parent`\'),
	\'User\' => array(\'class\' => \'modUser\', \'on\' => \'`User`.`id` = `Ticket`.`createdby`\'),
	\'Profile\' => array(\'class\' => \'modUserProfile\', \'on\' => \'`Profile`.`internalKey` = `User`.`id`\'),
);
if ($Tickets->authenticated) {
	$leftJoin[\'Vote\'] = array(
		\'class\' => \'TicketVote\',
		\'on\' => \'`Vote`.`id` = `Ticket`.`id` AND `Vote`.`class` = "Ticket" AND `Vote`.`createdby` = \' . $modx->user->id
	);
	$leftJoin[\'Star\'] = array(
		\'class\' => \'TicketStar\',
		\'on\' => \'`Star`.`id` = `Ticket`.`id` AND `Star`.`class` = "Ticket" AND `Star`.`createdby` = \' . $modx->user->id
	);
}

// Fields to select
$select = array(
	\'Section\' => $modx->getSelectColumns(\'TicketsSection\', \'Section\', \'section.\', array(\'content\'), true),
	\'User\' => $modx->getSelectColumns(\'modUser\', \'User\', \'\', array(\'username\')),
	\'Profile\' => $modx->getSelectColumns(\'modUserProfile\', \'Profile\', \'\', array(\'id\'), true),
	\'Ticket\' => !empty($includeContent)
		? $modx->getSelectColumns($class, $class)
		: $modx->getSelectColumns($class, $class, \'\', array(\'content\'), true),
);
if ($Tickets->authenticated) {
	$select[\'Vote\'] = \'`Vote`.`value` as `vote`\';
	$select[\'Star\'] = \'COUNT(`Star`.`id`) as `star`\';
}
$pdoFetch->addTime(\'Conditions prepared\');

// Add custom parameters
foreach (array(\'where\', \'select\', \'leftJoin\') as $v) {
	if (!empty($scriptProperties[$v])) {
		$tmp = $modx->fromJSON($scriptProperties[$v]);
		if (is_array($tmp)) {
			$$v = array_merge($$v, $tmp);
		}
	}
	unset($scriptProperties[$v]);
}

$default = array(
	\'class\' => $class,
	\'where\' => $modx->toJSON($where),
	\'leftJoin\' => $modx->toJSON($leftJoin),
	\'select\' => $modx->toJSON($select),
	\'sortby\' => \'createdon\',
	\'sortdir\' => \'DESC\',
	\'groupby\' => $class . \'.id\',
	\'return\' => !empty($returnIds)
		? \'ids\'
		: \'data\',
	\'nestedChunkPrefix\' => \'tickets_\',
);

// Merge all properties and run!
$pdoFetch->setConfig(array_merge($default, $scriptProperties));
$pdoFetch->addTime(\'Query parameters are prepared.\');
$rows = $pdoFetch->run();

if (!empty($returnIds)) {
	return $rows;
}

// Processing rows
$output = array();
if (!empty($rows) && is_array($rows)) {
	foreach ($rows as $k => $row) {
		// Handle properties
		$properties = is_string($row[\'properties\'])
			? $modx->fromJSON($row[\'properties\'])
			: $row[\'properties\'];
		if (!empty($properties[\'tickets\'])) {
			$properties = $properties[\'tickets\'];
		}
		if (empty($properties[\'process_tags\'])) {
			foreach ($row as $field => $value) {
				$row[$field] = str_replace(
					array(\'[\', \']\', \'`\', \'{\', \'}\'),
					array(\'&#91;\', \'&#93;\', \'&#96;\', \'&#123;\', \'&#125;\'),
					$value
				);
			}
		}
		if (!is_array($properties)) {
			$properties = array();
		}

		// Handle rating
		$row[\'rating\'] = $row[\'rating_total\'] = array_key_exists(\'rating\', $properties)
			? $properties[\'rating\']
			: 0;
		$row[\'rating_plus\'] = array_key_exists(\'rating_plus\', $properties)
			? $properties[\'rating_plus\']
			: 0;
		$row[\'rating_minus\'] = array_key_exists(\'rating_minus\', $properties)
			? $properties[\'rating_minus\']
			: 0;
		if ($row[\'rating\'] > 0) {
			$row[\'rating\'] = \'+\' . $row[\'rating\'];
			$row[\'rating_positive\'] = 1;
		}
		elseif ($row[\'rating\'] < 0) {
			$row[\'rating_negative\'] = 1;
		}

		if (!$Tickets->authenticated || $modx->user->id == $row[\'createdby\']) {
			$row[\'cant_vote\'] = 1;
		}
		elseif (array_key_exists(\'vote\', $row)) {
			if ($row[\'vote\'] == \'\') {
				$row[\'can_vote\'] = 1;
			}
			elseif ($row[\'vote\'] > 0) {
				$row[\'voted_plus\'] = 1;
				$row[\'cant_vote\'] = 1;
			}
			elseif ($row[\'vote\'] < 0) {
				$row[\'voted_minus\'] = 1;
				$row[\'cant_vote\'] = 1;
			}
			else {
				$row[\'voted_none\'] = 1;
				$row[\'cant_vote\'] = 1;
			}
		}
		$row[\'active\'] = (int)!empty($row[\'can_vote\']);
		$row[\'inactive\'] = (int)!empty($row[\'cant_vote\']);

		$row[\'can_star\'] = $Tickets->authenticated;
		$row[\'stared\'] = !empty($row[\'star\']);
		$row[\'unstared\'] = empty($row[\'star\']);

		// Adding fields to row
		$additional_fields = $pdoFetch->getObject(\'Ticket\', $row[\'id\'], array(
			\'leftJoin\' => array(
				\'View\' => array(\'class\' => \'TicketView\', \'on\' => \'`Ticket`.`id` = `View`.`parent`\'),
				\'Thread\' => array(\'class\' => \'TicketThread\', \'on\' => \'`Thread`.`resource` = `Ticket`.`id`  AND `Thread`.`deleted` = 0\'),
			),
			\'select\' => array(
				\'View\' => \'COUNT(`View`.`parent`) as `views`\',
				\'Thread\' => \'`Thread`.`id` as `thread`\',
			),
			\'groupby\' => $class . \'.id\'
		));
		$row = array_merge($row, $additional_fields);
		$row[\'date_ago\'] = $Tickets->dateFormat($row[\'createdon\']);
		$row[\'comments\'] = $modx->getCount(\'TicketComment\', array(\'published\' => 1, \'thread\' => $row[\'thread\']));
		$row[\'stars\'] = $modx->getCount(\'TicketStar\', array(\'id\' => $row[\'id\'], \'class\' => \'Ticket\'));
		// Special fields for quick placeholders
		$row[\'isauthor\'] = $modx->user->id == $row[\'createdby\'];
		$row[\'unpublished\'] = empty($row[\'published\']);

		$row[\'idx\'] = $pdoFetch->idx++;
		// Processing new comments
		if ($Tickets->authenticated) {
			$last_view = $pdoFetch->getObject(\'TicketView\', array(
				\'parent\' => $row[\'id\'],
				\'uid\' => $modx->user->id,
			), array(
				\'sortby\' => \'timestamp\',
				\'sortdir\' => \'DESC\',
				\'limit\' => 1,
			));
			if (!empty($last_view[\'timestamp\'])) {
				$row[\'new_comments\'] = $modx->getCount(\'TicketComment\', array(
					\'published\' => 1,
					\'thread\' => $row[\'thread\'],
					\'createdon:>\' => $last_view[\'timestamp\'],
					\'createdby:!=\' => $modx->user->id,
				));
			}
			else {
				$row[\'new_comments\'] = $row[\'comments\'];
			}
		}
		else {
			$row[\'new_comments\'] = \'\';
		}

		// Processing chunk
		$tpl = $pdoFetch->defineChunk($row);
		$output[] = empty($tpl)
			? \'<pre>\' . $pdoFetch->getChunk(\'\', $row) . \'</pre>\'
			: $pdoFetch->getChunk($tpl, $row, $pdoFetch->config[\'fastMode\']);
	}
}
$pdoFetch->addTime(\'Returning processed chunks\');

$log = \'\';
if ($modx->user->hasSessionContext(\'mgr\') && !empty($showLog)) {
	$log .= \'<pre class="getTicketsLog">\' . print_r($pdoFetch->getTime(), 1) . \'</pre>\';
}

// Return output
if (!empty($toSeparatePlaceholders)) {
	$output[\'log\'] = $log;
	$modx->setPlaceholders($output, $toSeparatePlaceholders);
}
else {
	if (empty($outputSeparator)) {
		$outputSeparator = "\\n";
	}
	$output = implode($outputSeparator, $output);
	$output .= $log;

	if (!empty($tplWrapper) && (!empty($wrapIfEmpty) || !empty($output))) {
		$array = array(\'output\' => $output);
		if ($Tickets->authenticated && $modx->resource->class_key == \'TicketsSection\') {
			/** @var TicketsSection $section */
			$section = &$modx->resource;
			$array[\'subscribed\'] = $section->isSubscribed();
		}
		$output = $pdoFetch->getChunk($tplWrapper, $array, $pdoFetch->config[\'fastMode\']);
	}

	if (!empty($toPlaceholder)) {
		$modx->setPlaceholder($toPlaceholder, $output);
	}
	else {
		return $output;
	}
}',
      'locked' => 0,
      'properties' => 'a:21:{s:3:"tpl";a:7:{s:4:"name";s:3:"tpl";s:4:"desc";s:16:"tickets_prop_tpl";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:20:"tpl.Tickets.list.row";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:5:"limit";a:7:{s:4:"name";s:5:"limit";s:4:"desc";s:18:"tickets_prop_limit";s:4:"type";s:11:"numberfield";s:7:"options";a:0:{}s:5:"value";i:10;s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:6:"offset";a:7:{s:4:"name";s:6:"offset";s:4:"desc";s:19:"tickets_prop_offset";s:4:"type";s:11:"numberfield";s:7:"options";a:0:{}s:5:"value";i:0;s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:5:"depth";a:7:{s:4:"name";s:5:"depth";s:4:"desc";s:18:"tickets_prop_depth";s:4:"type";s:11:"numberfield";s:7:"options";a:0:{}s:5:"value";i:10;s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:7:"parents";a:7:{s:4:"name";s:7:"parents";s:4:"desc";s:20:"tickets_prop_parents";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:9:"resources";a:7:{s:4:"name";s:9:"resources";s:4:"desc";s:22:"tickets_prop_resources";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:6:"sortby";a:7:{s:4:"name";s:6:"sortby";s:4:"desc";s:19:"tickets_prop_sortby";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:9:"createdon";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:7:"sortdir";a:7:{s:4:"name";s:7:"sortdir";s:4:"desc";s:20:"tickets_prop_sortdir";s:4:"type";s:4:"list";s:7:"options";a:2:{i:0;a:2:{s:4:"text";s:3:"ASC";s:5:"value";s:3:"ASC";}i:1;a:2:{s:4:"text";s:4:"DESC";s:5:"value";s:4:"DESC";}}s:5:"value";s:4:"DESC";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:14:"includeContent";a:7:{s:4:"name";s:14:"includeContent";s:4:"desc";s:27:"tickets_prop_includeContent";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:0;s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:13:"toPlaceholder";a:7:{s:4:"name";s:13:"toPlaceholder";s:4:"desc";s:26:"tickets_prop_toPlaceholder";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:10:"includeTVs";a:7:{s:4:"name";s:10:"includeTVs";s:4:"desc";s:23:"tickets_prop_includeTVs";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:5:"where";a:7:{s:4:"name";s:5:"where";s:4:"desc";s:18:"tickets_prop_where";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:8:"tvPrefix";a:7:{s:4:"name";s:8:"tvPrefix";s:4:"desc";s:21:"tickets_prop_tvPrefix";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:15:"outputSeparator";a:7:{s:4:"name";s:15:"outputSeparator";s:4:"desc";s:28:"tickets_prop_outputSeparator";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:1:"
";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:7:"showLog";a:7:{s:4:"name";s:7:"showLog";s:4:"desc";s:20:"tickets_prop_showLog";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:0;s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:8:"fastMode";a:7:{s:4:"name";s:8:"fastMode";s:4:"desc";s:21:"tickets_prop_fastMode";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:0;s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:15:"showUnpublished";a:7:{s:4:"name";s:15:"showUnpublished";s:4:"desc";s:28:"tickets_prop_showUnpublished";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:0;s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:11:"showDeleted";a:7:{s:4:"name";s:11:"showDeleted";s:4:"desc";s:24:"tickets_prop_showDeleted";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:0;s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:10:"showHidden";a:7:{s:4:"name";s:10:"showHidden";s:4:"desc";s:23:"tickets_prop_showHidden";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:1;s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:4:"user";a:7:{s:4:"name";s:4:"user";s:4:"desc";s:17:"tickets_prop_user";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:10:"tplWrapper";a:7:{s:4:"name";s:10:"tplWrapper";s:4:"desc";s:23:"tickets_prop_tplWrapper";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}}',
      'moduleguid' => '',
      'static' => 0,
      'static_file' => 'core/components/tickets/elements/snippets/snippet.get_tickets.php',
      'content' => '/* @var array $scriptProperties */
/* @var Tickets $Tickets */
$Tickets = $modx->getService(\'tickets\', \'Tickets\', $modx->getOption(\'tickets.core_path\', null, $modx->getOption(\'core_path\') . \'components/tickets/\') . \'model/tickets/\', $scriptProperties);
$Tickets->initialize($modx->context->key, $scriptProperties);

/** @var pdoFetch $pdoFetch */
$pdoFetch = $modx->getService(\'pdoFetch\');
$pdoFetch->setConfig($scriptProperties);
$pdoFetch->addTime(\'pdoTools loaded\');

if (isset($parents) && $parents === \'\') {
	$scriptProperties[\'parents\'] = $modx->resource->id;
}

$class = \'Ticket\';
$where = array(\'class_key\' => $class);

//Filter by user
if (!empty($user)) {
	$user = array_map(\'trim\', explode(\',\', $user));
	$user_id = $user_username = array();
	foreach ($user as $v) {
		if (is_numeric($v)) {
			$user_id[] = $v;
		}
		else {
			$user_username[] = $v;
		}
	}
	if (!empty($user_id) && !empty($user_username)) {
		$where[] = \'(`User`.`id` IN (\' . implode(\',\', $user_id) . \') OR `User`.`username` IN (\\\'\' . implode(\'\\\',\\\'\', $user_username) . \'\\\'))\';
	}
	else {
		if (!empty($user_id)) {
			$where[\'User.id:IN\'] = $user_id;
		}
		else {
			if (!empty($user_username)) {
				$where[\'User.username:IN\'] = $user_username;
			}
		}
	}
}

// Joining tables
$leftJoin = array(
	\'Section\' => array(\'class\' => \'TicketsSection\', \'on\' => \'`Section`.`id` = `Ticket`.`parent`\'),
	\'User\' => array(\'class\' => \'modUser\', \'on\' => \'`User`.`id` = `Ticket`.`createdby`\'),
	\'Profile\' => array(\'class\' => \'modUserProfile\', \'on\' => \'`Profile`.`internalKey` = `User`.`id`\'),
);
if ($Tickets->authenticated) {
	$leftJoin[\'Vote\'] = array(
		\'class\' => \'TicketVote\',
		\'on\' => \'`Vote`.`id` = `Ticket`.`id` AND `Vote`.`class` = "Ticket" AND `Vote`.`createdby` = \' . $modx->user->id
	);
	$leftJoin[\'Star\'] = array(
		\'class\' => \'TicketStar\',
		\'on\' => \'`Star`.`id` = `Ticket`.`id` AND `Star`.`class` = "Ticket" AND `Star`.`createdby` = \' . $modx->user->id
	);
}

// Fields to select
$select = array(
	\'Section\' => $modx->getSelectColumns(\'TicketsSection\', \'Section\', \'section.\', array(\'content\'), true),
	\'User\' => $modx->getSelectColumns(\'modUser\', \'User\', \'\', array(\'username\')),
	\'Profile\' => $modx->getSelectColumns(\'modUserProfile\', \'Profile\', \'\', array(\'id\'), true),
	\'Ticket\' => !empty($includeContent)
		? $modx->getSelectColumns($class, $class)
		: $modx->getSelectColumns($class, $class, \'\', array(\'content\'), true),
);
if ($Tickets->authenticated) {
	$select[\'Vote\'] = \'`Vote`.`value` as `vote`\';
	$select[\'Star\'] = \'COUNT(`Star`.`id`) as `star`\';
}
$pdoFetch->addTime(\'Conditions prepared\');

// Add custom parameters
foreach (array(\'where\', \'select\', \'leftJoin\') as $v) {
	if (!empty($scriptProperties[$v])) {
		$tmp = $modx->fromJSON($scriptProperties[$v]);
		if (is_array($tmp)) {
			$$v = array_merge($$v, $tmp);
		}
	}
	unset($scriptProperties[$v]);
}

$default = array(
	\'class\' => $class,
	\'where\' => $modx->toJSON($where),
	\'leftJoin\' => $modx->toJSON($leftJoin),
	\'select\' => $modx->toJSON($select),
	\'sortby\' => \'createdon\',
	\'sortdir\' => \'DESC\',
	\'groupby\' => $class . \'.id\',
	\'return\' => !empty($returnIds)
		? \'ids\'
		: \'data\',
	\'nestedChunkPrefix\' => \'tickets_\',
);

// Merge all properties and run!
$pdoFetch->setConfig(array_merge($default, $scriptProperties));
$pdoFetch->addTime(\'Query parameters are prepared.\');
$rows = $pdoFetch->run();

if (!empty($returnIds)) {
	return $rows;
}

// Processing rows
$output = array();
if (!empty($rows) && is_array($rows)) {
	foreach ($rows as $k => $row) {
		// Handle properties
		$properties = is_string($row[\'properties\'])
			? $modx->fromJSON($row[\'properties\'])
			: $row[\'properties\'];
		if (!empty($properties[\'tickets\'])) {
			$properties = $properties[\'tickets\'];
		}
		if (empty($properties[\'process_tags\'])) {
			foreach ($row as $field => $value) {
				$row[$field] = str_replace(
					array(\'[\', \']\', \'`\', \'{\', \'}\'),
					array(\'&#91;\', \'&#93;\', \'&#96;\', \'&#123;\', \'&#125;\'),
					$value
				);
			}
		}
		if (!is_array($properties)) {
			$properties = array();
		}

		// Handle rating
		$row[\'rating\'] = $row[\'rating_total\'] = array_key_exists(\'rating\', $properties)
			? $properties[\'rating\']
			: 0;
		$row[\'rating_plus\'] = array_key_exists(\'rating_plus\', $properties)
			? $properties[\'rating_plus\']
			: 0;
		$row[\'rating_minus\'] = array_key_exists(\'rating_minus\', $properties)
			? $properties[\'rating_minus\']
			: 0;
		if ($row[\'rating\'] > 0) {
			$row[\'rating\'] = \'+\' . $row[\'rating\'];
			$row[\'rating_positive\'] = 1;
		}
		elseif ($row[\'rating\'] < 0) {
			$row[\'rating_negative\'] = 1;
		}

		if (!$Tickets->authenticated || $modx->user->id == $row[\'createdby\']) {
			$row[\'cant_vote\'] = 1;
		}
		elseif (array_key_exists(\'vote\', $row)) {
			if ($row[\'vote\'] == \'\') {
				$row[\'can_vote\'] = 1;
			}
			elseif ($row[\'vote\'] > 0) {
				$row[\'voted_plus\'] = 1;
				$row[\'cant_vote\'] = 1;
			}
			elseif ($row[\'vote\'] < 0) {
				$row[\'voted_minus\'] = 1;
				$row[\'cant_vote\'] = 1;
			}
			else {
				$row[\'voted_none\'] = 1;
				$row[\'cant_vote\'] = 1;
			}
		}
		$row[\'active\'] = (int)!empty($row[\'can_vote\']);
		$row[\'inactive\'] = (int)!empty($row[\'cant_vote\']);

		$row[\'can_star\'] = $Tickets->authenticated;
		$row[\'stared\'] = !empty($row[\'star\']);
		$row[\'unstared\'] = empty($row[\'star\']);

		// Adding fields to row
		$additional_fields = $pdoFetch->getObject(\'Ticket\', $row[\'id\'], array(
			\'leftJoin\' => array(
				\'View\' => array(\'class\' => \'TicketView\', \'on\' => \'`Ticket`.`id` = `View`.`parent`\'),
				\'Thread\' => array(\'class\' => \'TicketThread\', \'on\' => \'`Thread`.`resource` = `Ticket`.`id`  AND `Thread`.`deleted` = 0\'),
			),
			\'select\' => array(
				\'View\' => \'COUNT(`View`.`parent`) as `views`\',
				\'Thread\' => \'`Thread`.`id` as `thread`\',
			),
			\'groupby\' => $class . \'.id\'
		));
		$row = array_merge($row, $additional_fields);
		$row[\'date_ago\'] = $Tickets->dateFormat($row[\'createdon\']);
		$row[\'comments\'] = $modx->getCount(\'TicketComment\', array(\'published\' => 1, \'thread\' => $row[\'thread\']));
		$row[\'stars\'] = $modx->getCount(\'TicketStar\', array(\'id\' => $row[\'id\'], \'class\' => \'Ticket\'));
		// Special fields for quick placeholders
		$row[\'isauthor\'] = $modx->user->id == $row[\'createdby\'];
		$row[\'unpublished\'] = empty($row[\'published\']);

		$row[\'idx\'] = $pdoFetch->idx++;
		// Processing new comments
		if ($Tickets->authenticated) {
			$last_view = $pdoFetch->getObject(\'TicketView\', array(
				\'parent\' => $row[\'id\'],
				\'uid\' => $modx->user->id,
			), array(
				\'sortby\' => \'timestamp\',
				\'sortdir\' => \'DESC\',
				\'limit\' => 1,
			));
			if (!empty($last_view[\'timestamp\'])) {
				$row[\'new_comments\'] = $modx->getCount(\'TicketComment\', array(
					\'published\' => 1,
					\'thread\' => $row[\'thread\'],
					\'createdon:>\' => $last_view[\'timestamp\'],
					\'createdby:!=\' => $modx->user->id,
				));
			}
			else {
				$row[\'new_comments\'] = $row[\'comments\'];
			}
		}
		else {
			$row[\'new_comments\'] = \'\';
		}

		// Processing chunk
		$tpl = $pdoFetch->defineChunk($row);
		$output[] = empty($tpl)
			? \'<pre>\' . $pdoFetch->getChunk(\'\', $row) . \'</pre>\'
			: $pdoFetch->getChunk($tpl, $row, $pdoFetch->config[\'fastMode\']);
	}
}
$pdoFetch->addTime(\'Returning processed chunks\');

$log = \'\';
if ($modx->user->hasSessionContext(\'mgr\') && !empty($showLog)) {
	$log .= \'<pre class="getTicketsLog">\' . print_r($pdoFetch->getTime(), 1) . \'</pre>\';
}

// Return output
if (!empty($toSeparatePlaceholders)) {
	$output[\'log\'] = $log;
	$modx->setPlaceholders($output, $toSeparatePlaceholders);
}
else {
	if (empty($outputSeparator)) {
		$outputSeparator = "\\n";
	}
	$output = implode($outputSeparator, $output);
	$output .= $log;

	if (!empty($tplWrapper) && (!empty($wrapIfEmpty) || !empty($output))) {
		$array = array(\'output\' => $output);
		if ($Tickets->authenticated && $modx->resource->class_key == \'TicketsSection\') {
			/** @var TicketsSection $section */
			$section = &$modx->resource;
			$array[\'subscribed\'] = $section->isSubscribed();
		}
		$output = $pdoFetch->getChunk($tplWrapper, $array, $pdoFetch->config[\'fastMode\']);
	}

	if (!empty($toPlaceholder)) {
		$modx->setPlaceholder($toPlaceholder, $output);
	}
	else {
		return $output;
	}
}',
    ),
  ),
  '34796156d4a4c0155e19df9fdd01e893' => 
  array (
    'criteria' => 
    array (
      'name' => 'getTicketsSections',
    ),
    'object' => 
    array (
      'id' => 54,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'getTicketsSections',
      'description' => '',
      'editor_type' => 0,
      'category' => 12,
      'cache_type' => 0,
      'snippet' => '/* @var array $scriptProperties */
/* @var Tickets $Tickets */
$Tickets = $modx->getService(\'tickets\', \'Tickets\', $modx->getOption(\'tickets.core_path\', null, $modx->getOption(\'core_path\') . \'components/tickets/\') . \'model/tickets/\', $scriptProperties);
$Tickets->initialize($modx->context->key, $scriptProperties);

/** @var pdoFetch $pdoFetch */
$pdoFetch = $modx->getService(\'pdoFetch\');
$pdoFetch->setConfig($scriptProperties);
$pdoFetch->addTime(\'pdoTools loaded\');

if (isset($parents) && $parents === \'\') {
	$scriptProperties[\'parents\'] = $modx->resource->id;
}

$class = \'TicketsSection\';
$where = array(\'class_key\' => $class);

// Adding custom where parameters
if (!empty($scriptProperties[\'where\'])) {
	$tmp = $modx->fromJSON($scriptProperties[\'where\']);
	if (is_array($tmp)) {
		$where = array_merge($where, $tmp);
	}
}
unset($scriptProperties[\'where\']);
$pdoFetch->addTime(\'"Where" expression built.\');

// Joining tables
$leftJoin = array(
	\'Ticket\' => array(\'class\' => \'Ticket\', \'on\' => \'Ticket.parent=TicketsSection.id AND Ticket.published=1 AND Ticket.deleted=0 AND Ticket.class_key="Ticket"\'),
	\'View\' => array(\'class\' => \'TicketView\', \'on\' => \'Ticket.id=View.parent\'),
	//\'TicketVote\' => array(\'class\' => \'TicketVote\', \'on\' => \'icket.id=Vote.parent AND Vote.class="Ticket"\'),
);

// Fields to select
$select = array(
	\'TicketsSection\' => !empty($includeContent)
		? $modx->getSelectColumns($class, $class)
		: $modx->getSelectColumns($class, $class, \'\', array(\'content\'), true),
	\'Ticket\' => \'COUNT(DISTINCT `Ticket`.`id`) as `tickets`\',
	\'View\' => \'COUNT(`View`.`parent`) as `views`\',
	//,\'Vote\' => \'SUM(DISTINCT `Vote`.`value`) as `votes`\'
);

$default = array(
	\'class\' => $class,
	\'where\' => $modx->toJSON($where),
	\'leftJoin\' => $modx->toJSON($leftJoin),
	\'select\' => $modx->toJSON($select),
	\'groupby\' => $class . \'.id\',
	\'sortby\' => \'views\',
	\'sortdir\' => \'DESC\',
	\'return\' => !empty($returnIds)
		? \'ids\'
		: \'data\',
	\'nestedChunkPrefix\' => \'tickets_\',
);

// Merge all properties and run!
$pdoFetch->setConfig(array_merge($default, $scriptProperties));
$pdoFetch->addTime(\'Query parameters are prepared.\');
$rows = $pdoFetch->run();

if (!empty($returnIds)) {
	return $rows;
}

// Processing rows
$output = array();
if (!empty($rows) && is_array($rows)) {
	foreach ($rows as $k => $row) {
		// Processing main fields
		$add = $pdoFetch->getObject(\'TicketThread\', array(\'deleted\' => 0), array(
			\'innerJoin\' => array(
				\'Ticket\' => array(\'class\' => \'Ticket\', \'on\' => \'Ticket.id = TicketThread.resource AND Ticket.published=1 AND Ticket.deleted=0 AND Ticket.class_key="Ticket" AND Ticket.parent=\' . $row[\'id\']),
			),
			\'select\' => array(
				\'TicketThread\' => \'SUM(TicketThread.comments) as `comments`\'
			)
		));

		$row[\'comments\'] = !empty($add[\'comments\'])
			? $add[\'comments\']
			: 0;
		$row[\'date_ago\'] = $Tickets->dateFormat($row[\'createdon\']);

		$row[\'idx\'] = $pdoFetch->idx++;
		// Processing chunk
		$tpl = $pdoFetch->defineChunk($row);
		$output[] = empty($tpl)
			? \'<pre>\' . $pdoFetch->getChunk(\'\', $row) . \'</pre>\'
			: $pdoFetch->getChunk($tpl, $row, $pdoFetch->config[\'fastMode\']);
	}
}
$pdoFetch->addTime(\'Returning processed chunks\');
if (empty($outputSeparator)) {
	$outputSeparator = "\\n";
}
$output = implode($outputSeparator, $output);

$log = \'\';
if ($modx->user->hasSessionContext(\'mgr\') && !empty($showLog)) {
	$log .= \'<pre class="getSectionsLog">\' . print_r($pdoFetch->getTime(), 1) . \'</pre>\';
}

// Return output
if (!empty($toSeparatePlaceholders)) {
	$output[\'log\'] = $log;
	$modx->setPlaceholders($output, $toSeparatePlaceholders);
}
else {
	$output .= $log;

	if (!empty($tplWrapper) && (!empty($wrapIfEmpty) || !empty($output))) {
		$output = $pdoFetch->getChunk($tplWrapper, array(\'output\' => $output), $pdoFetch->config[\'fastMode\']);
	}

	if (!empty($toPlaceholder)) {
		$modx->setPlaceholder($toPlaceholder, $output);
	}
	else {
		return $output;
	}
}',
      'locked' => 0,
      'properties' => 'a:19:{s:3:"tpl";a:7:{s:4:"name";s:3:"tpl";s:4:"desc";s:16:"tickets_prop_tpl";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:24:"tpl.Tickets.sections.row";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:5:"limit";a:7:{s:4:"name";s:5:"limit";s:4:"desc";s:18:"tickets_prop_limit";s:4:"type";s:11:"numberfield";s:7:"options";a:0:{}s:5:"value";i:10;s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:6:"offset";a:7:{s:4:"name";s:6:"offset";s:4:"desc";s:19:"tickets_prop_offset";s:4:"type";s:11:"numberfield";s:7:"options";a:0:{}s:5:"value";i:0;s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:5:"depth";a:7:{s:4:"name";s:5:"depth";s:4:"desc";s:18:"tickets_prop_depth";s:4:"type";s:11:"numberfield";s:7:"options";a:0:{}s:5:"value";i:0;s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:7:"parents";a:7:{s:4:"name";s:7:"parents";s:4:"desc";s:20:"tickets_prop_parents";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:9:"resources";a:7:{s:4:"name";s:9:"resources";s:4:"desc";s:22:"tickets_prop_resources";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:6:"sortby";a:7:{s:4:"name";s:6:"sortby";s:4:"desc";s:19:"tickets_prop_sortby";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:5:"views";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:7:"sortdir";a:7:{s:4:"name";s:7:"sortdir";s:4:"desc";s:20:"tickets_prop_sortdir";s:4:"type";s:4:"list";s:7:"options";a:2:{i:0;a:2:{s:4:"text";s:3:"ASC";s:5:"value";s:3:"ASC";}i:1;a:2:{s:4:"text";s:4:"DESC";s:5:"value";s:4:"DESC";}}s:5:"value";s:4:"DESC";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:14:"includeContent";a:7:{s:4:"name";s:14:"includeContent";s:4:"desc";s:27:"tickets_prop_includeContent";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:0;s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:13:"toPlaceholder";a:7:{s:4:"name";s:13:"toPlaceholder";s:4:"desc";s:26:"tickets_prop_toPlaceholder";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:10:"includeTVs";a:7:{s:4:"name";s:10:"includeTVs";s:4:"desc";s:23:"tickets_prop_includeTVs";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:5:"where";a:7:{s:4:"name";s:5:"where";s:4:"desc";s:18:"tickets_prop_where";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:8:"tvPrefix";a:7:{s:4:"name";s:8:"tvPrefix";s:4:"desc";s:21:"tickets_prop_tvPrefix";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:15:"outputSeparator";a:7:{s:4:"name";s:15:"outputSeparator";s:4:"desc";s:28:"tickets_prop_outputSeparator";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:1:"
";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:7:"showLog";a:7:{s:4:"name";s:7:"showLog";s:4:"desc";s:20:"tickets_prop_showLog";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:0;s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:8:"fastMode";a:7:{s:4:"name";s:8:"fastMode";s:4:"desc";s:21:"tickets_prop_fastMode";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:0;s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:15:"showUnpublished";a:7:{s:4:"name";s:15:"showUnpublished";s:4:"desc";s:28:"tickets_prop_showUnpublished";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:0;s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:11:"showDeleted";a:7:{s:4:"name";s:11:"showDeleted";s:4:"desc";s:24:"tickets_prop_showDeleted";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:0;s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:10:"showHidden";a:7:{s:4:"name";s:10:"showHidden";s:4:"desc";s:23:"tickets_prop_showHidden";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:0;s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}}',
      'moduleguid' => '',
      'static' => 0,
      'static_file' => 'core/components/tickets/elements/snippets/snippet.get_sections.php',
      'content' => '/* @var array $scriptProperties */
/* @var Tickets $Tickets */
$Tickets = $modx->getService(\'tickets\', \'Tickets\', $modx->getOption(\'tickets.core_path\', null, $modx->getOption(\'core_path\') . \'components/tickets/\') . \'model/tickets/\', $scriptProperties);
$Tickets->initialize($modx->context->key, $scriptProperties);

/** @var pdoFetch $pdoFetch */
$pdoFetch = $modx->getService(\'pdoFetch\');
$pdoFetch->setConfig($scriptProperties);
$pdoFetch->addTime(\'pdoTools loaded\');

if (isset($parents) && $parents === \'\') {
	$scriptProperties[\'parents\'] = $modx->resource->id;
}

$class = \'TicketsSection\';
$where = array(\'class_key\' => $class);

// Adding custom where parameters
if (!empty($scriptProperties[\'where\'])) {
	$tmp = $modx->fromJSON($scriptProperties[\'where\']);
	if (is_array($tmp)) {
		$where = array_merge($where, $tmp);
	}
}
unset($scriptProperties[\'where\']);
$pdoFetch->addTime(\'"Where" expression built.\');

// Joining tables
$leftJoin = array(
	\'Ticket\' => array(\'class\' => \'Ticket\', \'on\' => \'Ticket.parent=TicketsSection.id AND Ticket.published=1 AND Ticket.deleted=0 AND Ticket.class_key="Ticket"\'),
	\'View\' => array(\'class\' => \'TicketView\', \'on\' => \'Ticket.id=View.parent\'),
	//\'TicketVote\' => array(\'class\' => \'TicketVote\', \'on\' => \'icket.id=Vote.parent AND Vote.class="Ticket"\'),
);

// Fields to select
$select = array(
	\'TicketsSection\' => !empty($includeContent)
		? $modx->getSelectColumns($class, $class)
		: $modx->getSelectColumns($class, $class, \'\', array(\'content\'), true),
	\'Ticket\' => \'COUNT(DISTINCT `Ticket`.`id`) as `tickets`\',
	\'View\' => \'COUNT(`View`.`parent`) as `views`\',
	//,\'Vote\' => \'SUM(DISTINCT `Vote`.`value`) as `votes`\'
);

$default = array(
	\'class\' => $class,
	\'where\' => $modx->toJSON($where),
	\'leftJoin\' => $modx->toJSON($leftJoin),
	\'select\' => $modx->toJSON($select),
	\'groupby\' => $class . \'.id\',
	\'sortby\' => \'views\',
	\'sortdir\' => \'DESC\',
	\'return\' => !empty($returnIds)
		? \'ids\'
		: \'data\',
	\'nestedChunkPrefix\' => \'tickets_\',
);

// Merge all properties and run!
$pdoFetch->setConfig(array_merge($default, $scriptProperties));
$pdoFetch->addTime(\'Query parameters are prepared.\');
$rows = $pdoFetch->run();

if (!empty($returnIds)) {
	return $rows;
}

// Processing rows
$output = array();
if (!empty($rows) && is_array($rows)) {
	foreach ($rows as $k => $row) {
		// Processing main fields
		$add = $pdoFetch->getObject(\'TicketThread\', array(\'deleted\' => 0), array(
			\'innerJoin\' => array(
				\'Ticket\' => array(\'class\' => \'Ticket\', \'on\' => \'Ticket.id = TicketThread.resource AND Ticket.published=1 AND Ticket.deleted=0 AND Ticket.class_key="Ticket" AND Ticket.parent=\' . $row[\'id\']),
			),
			\'select\' => array(
				\'TicketThread\' => \'SUM(TicketThread.comments) as `comments`\'
			)
		));

		$row[\'comments\'] = !empty($add[\'comments\'])
			? $add[\'comments\']
			: 0;
		$row[\'date_ago\'] = $Tickets->dateFormat($row[\'createdon\']);

		$row[\'idx\'] = $pdoFetch->idx++;
		// Processing chunk
		$tpl = $pdoFetch->defineChunk($row);
		$output[] = empty($tpl)
			? \'<pre>\' . $pdoFetch->getChunk(\'\', $row) . \'</pre>\'
			: $pdoFetch->getChunk($tpl, $row, $pdoFetch->config[\'fastMode\']);
	}
}
$pdoFetch->addTime(\'Returning processed chunks\');
if (empty($outputSeparator)) {
	$outputSeparator = "\\n";
}
$output = implode($outputSeparator, $output);

$log = \'\';
if ($modx->user->hasSessionContext(\'mgr\') && !empty($showLog)) {
	$log .= \'<pre class="getSectionsLog">\' . print_r($pdoFetch->getTime(), 1) . \'</pre>\';
}

// Return output
if (!empty($toSeparatePlaceholders)) {
	$output[\'log\'] = $log;
	$modx->setPlaceholders($output, $toSeparatePlaceholders);
}
else {
	$output .= $log;

	if (!empty($tplWrapper) && (!empty($wrapIfEmpty) || !empty($output))) {
		$output = $pdoFetch->getChunk($tplWrapper, array(\'output\' => $output), $pdoFetch->config[\'fastMode\']);
	}

	if (!empty($toPlaceholder)) {
		$modx->setPlaceholder($toPlaceholder, $output);
	}
	else {
		return $output;
	}
}',
    ),
  ),
  '8cbe8a03a11cbb1ed337a1c03df9c5d9' => 
  array (
    'criteria' => 
    array (
      'name' => 'getComments',
    ),
    'object' => 
    array (
      'id' => 55,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'getComments',
      'description' => '',
      'editor_type' => 0,
      'category' => 12,
      'cache_type' => 0,
      'snippet' => '/* @var array $scriptProperties */
/* @var Tickets $Tickets */
$Tickets = $modx->getService(\'tickets\', \'Tickets\', $modx->getOption(\'tickets.core_path\', null, $modx->getOption(\'core_path\') . \'components/tickets/\') . \'model/tickets/\', $scriptProperties);
$Tickets->initialize($modx->context->key, $scriptProperties);

/** @var pdoFetch $pdoFetch */
$pdoFetch = $modx->getService(\'pdoFetch\');
$pdoFetch->setConfig($scriptProperties);
$pdoFetch->addTime(\'pdoTools loaded\');

$tpl = $modx->getOption(\'tpl\', $scriptProperties, \'tpl.Tickets.comment.list.row\');
$outputSeparator = $modx->getOption(\'outputSeparator\', $scriptProperties, "\\n");

// Define threads of comments
if (!empty($parents) || !empty($resources) || !empty($threads)) {
	$where = array();
	$options = array(
		\'innerJoin\' => array(
			\'Thread\' => array(
				\'class\' => \'TicketThread\',
				\'on\' => \'`Ticket`.`id` = `Thread`.`resource`\',
			)
		),
		\'groupby\' => \'`Ticket`.`id`\',
		\'select\' => array(\'Thread\' => \'`Thread`.`id`\'),
		\'showUnpublished\' => !empty($showUnpublished),
		\'showDeleted\' => !empty($showDeleted),
		\'depth\' => isset($depth)
			? (int)$depth
			: 10,
	);
	if (!empty($parents)) {
		$options[\'parents\'] = $parents;
	}
	if (!empty($resources)) {
		$options[\'resources\'] = $resources;
	}
	if (!empty($threads)) {
		$threads = array_map(\'trim\', explode(\',\', $threads));
		$threads_in = $threads_out = array();
		foreach ($threads as $v) {
			if (!is_numeric($v)) {
				continue;
			}
			if ($v[0] == \'-\') {
				$threads_out[] = abs($v);
			}
			else {
				$threads_in[] = abs($v);
			}
		}
		if (!empty($threads_in)) {
			$where[\'Thread.id:IN\'] = $threads_in;
		}
		if (!empty($threads_out)) {
			$where[\'Thread.id:NOT IN\'] = $threads_out;
		}
	}

	$rows = $pdoFetch->getCollection(\'Ticket\', $where, $options);
	$threads = array();
	foreach ($rows as $item) {
		$threads[] = $item[\'id\'];
	}
}

// Prepare query to db
$class = \'TicketComment\';
$where = array();
if (empty($showUnpublished)) {
	$where[\'published\'] = 1;
}
if (empty($showDeleted)) {
	$where[\'deleted\'] = 0;
}

// Filter by user
if (!empty($user)) {
	$user = array_map(\'trim\', explode(\',\', $user));
	$user_id = $user_username = array();
	foreach ($user as $v) {
		if (is_numeric($v)) {
			$user_id[] = $v;
		}
		else {
			$user_username[] = $v;
		}
	}
	if (!empty($user_id) && !empty($user_username)) {
		$where[] = \'(`User`.`id` IN (\' . implode(\',\', $user_id) . \') OR `User`.`username` IN (\\\'\' . implode(\'\\\',\\\'\', $user_username) . \'\\\'))\';
	}
	elseif (!empty($user_id)) {
		$where[\'User.id:IN\'] = $user_id;
	}
	elseif (!empty($user_username)) {
		$where[\'User.username:IN\'] = $user_username;
	}
}
// Filter by threads
if (!empty($threads)) {
	$where[\'thread:IN\'] = $threads;
}
// Filter by comments
if (!empty($comments)) {
	$comments = array_map(\'trim\', explode(\',\', $comments));
	$comments_in = $comments_out = array();
	foreach ($comments as $v) {
		if (!is_numeric($v)) {
			continue;
		}
		if ($v[0] == \'-\') {
			$comments_out[] = abs($v);
		}
		else {
			$comments_in[] = abs($v);
		}
	}
	if (!empty($comments_in)) {
		$where[\'id:IN\'] = $comments_in;
	}
	if (!empty($comments_out)) {
		$where[\'id:NOT IN\'] = $comments_out;
	}
}

// Joining tables
$innerJoin = array(
	\'Thread\' => array(
		\'class\' => \'TicketThread\',
		\'on\' => \'`Thread`.`id` = `TicketComment`.`thread`\'
	)
);
$leftJoin = array(
	\'User\' => array(\'class\' => \'modUser\', \'on\' => \'`User`.`id` = `TicketComment`.`createdby`\'),
	\'Profile\' => array(\'class\' => \'modUserProfile\', \'on\' => \'`Profile`.`internalKey` = `TicketComment`.`createdby`\'),
	\'Ticket\' => array(\'class\' => \'Ticket\', \'on\' => \'`Ticket`.`id` = `Thread`.`resource`\'),
	\'Section\' => array(\'class\' => \'TicketsSection\', \'on\' => \'`Section`.`id` = `Ticket`.`parent`\'),
);
if ($Tickets->authenticated) {
	$leftJoin[\'Vote\'] = array(
		\'class\' => \'TicketVote\',
		\'on\' => \'`Vote`.`id` = `TicketComment`.`id` AND `Vote`.`class` = "TicketComment" AND `Vote`.`createdby` = \' . $modx->user->id
	);
	$leftJoin[\'Star\'] = array(
		\'class\' => \'TicketStar\',
		\'on\' => \'`Star`.`id` = `TicketComment`.`id` AND `Star`.`class` = "TicketComment" AND `Star`.`createdby` = \' . $modx->user->id
	);
}
// Fields to select
$select = array(
	\'TicketComment\' => $modx->getSelectColumns(\'TicketComment\', \'TicketComment\', \'\', array(\'raw\'), true) . \', `rating` as `rating_total`\',
	\'Thread\' => \'`Thread`.`resource`\',
	\'User\' => \'`User`.`username`\',
	\'Profile\' => $modx->getSelectColumns(\'modUserProfile\', \'Profile\', \'\', array(\'id\', \'email\'), true) . \',`Profile`.`email` as `user_email`\',
	\'Ticket\' => !empty($includeContent)
		? $modx->getSelectColumns(\'Ticket\', \'Ticket\', \'ticket.\')
		: $modx->getSelectColumns(\'Ticket\', \'Ticket\', \'ticket.\', array(\'content\'), true),
	\'Section\' => !empty($includeContent)
		? $modx->getSelectColumns(\'TicketsSection\', \'Section\', \'section.\')
		: $modx->getSelectColumns(\'TicketsSection\', \'Section\', \'section.\', array(\'content\'), true),
);
if ($Tickets->authenticated) {
	$select[\'Vote\'] = \'`Vote`.`value` as `vote`\';
	$select[\'Star\'] = \'COUNT(`Star`.`id`) as `star`\';
}

// Add custom parameters
foreach (array(\'where\', \'select\', \'leftJoin\', \'innerJoin\') as $v) {
	if (!empty($scriptProperties[$v])) {
		$tmp = $modx->fromJSON($scriptProperties[$v]);
		if (is_array($tmp)) {
			$$v = array_merge($$v, $tmp);
		}
	}
	unset($scriptProperties[$v]);
}
$pdoFetch->addTime(\'Conditions prepared\');

$default = array(
	\'class\' => $class,
	\'where\' => $modx->toJSON($where),
	\'innerJoin\' => $modx->toJSON($innerJoin),
	\'leftJoin\' => $modx->toJSON($leftJoin),
	\'select\' => $modx->toJSON($select),
	\'sortby\' => $class . \'.createdon\',
	\'sortdir\' => \'DESC\',
	\'groupby\' => $class . \'.id\',
	\'fastMode\' => true,
	\'return\' => \'data\',
	\'nestedChunkPrefix\' => \'tickets_\',
);

// Merge all properties and run!
$pdoFetch->setConfig(array_merge($default, $scriptProperties), false);
$pdoFetch->addTime(\'Query parameters prepared.\');
$rows = $pdoFetch->run();

$output = array();
if (!empty($rows)) {
	foreach ($rows as $row) {
		$row[\'comments\'] = $modx->getCount(\'TicketComment\', array(\'published\' => 1, \'thread\' => $row[\'thread\']));;
		$output[] = $Tickets->templateNode($row, $tpl);
	}
}
$pdoFetch->addTime(\'Returning processed chunks\');
$output = implode($outputSeparator, $output);

$log = \'\';
if ($modx->user->hasSessionContext(\'mgr\') && !empty($showLog)) {
	$log .= \'<pre class="getCommentsLog">\' . print_r($pdoFetch->getTime(), 1) . \'</pre>\';
}

// Return output
if (!empty($toSeparatePlaceholders)) {
	$output[\'log\'] = $log;
	$modx->setPlaceholders($output, $toSeparatePlaceholders);
}
else {
	$output .= $log;

	if (!empty($tplWrapper) && (!empty($wrapIfEmpty) || !empty($output))) {
		$output = $pdoFetch->getChunk($tplWrapper, array(\'output\' => $output), $pdoFetch->config[\'fastMode\']);
	}

	if (!empty($toPlaceholder)) {
		$modx->setPlaceholder($toPlaceholder, $output);
	}
	else {
		return $output;
	}
}',
      'locked' => 0,
      'properties' => 'a:15:{s:3:"tpl";a:7:{s:4:"name";s:3:"tpl";s:4:"desc";s:16:"tickets_prop_tpl";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:28:"tpl.Tickets.comment.list.row";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:17:"tplCommentDeleted";a:7:{s:4:"name";s:17:"tplCommentDeleted";s:4:"desc";s:30:"tickets_prop_tplCommentDeleted";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:31:"tpl.Tickets.comment.one.deleted";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:5:"depth";a:7:{s:4:"name";s:5:"depth";s:4:"desc";s:18:"tickets_prop_depth";s:4:"type";s:11:"numberfield";s:7:"options";a:0:{}s:5:"value";i:10;s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:7:"threads";a:7:{s:4:"name";s:7:"threads";s:4:"desc";s:20:"tickets_prop_threads";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:7:"parents";a:7:{s:4:"name";s:7:"parents";s:4:"desc";s:20:"tickets_prop_parents";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:9:"resources";a:7:{s:4:"name";s:9:"resources";s:4:"desc";s:22:"tickets_prop_resources";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:6:"sortby";a:7:{s:4:"name";s:6:"sortby";s:4:"desc";s:19:"tickets_prop_sortby";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:9:"createdon";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:7:"sortdir";a:7:{s:4:"name";s:7:"sortdir";s:4:"desc";s:20:"tickets_prop_sortdir";s:4:"type";s:4:"list";s:7:"options";a:2:{i:0;a:2:{s:4:"text";s:3:"ASC";s:5:"value";s:3:"ASC";}i:1;a:2:{s:4:"text";s:4:"DESC";s:5:"value";s:4:"DESC";}}s:5:"value";s:4:"DESC";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:14:"includeContent";a:7:{s:4:"name";s:14:"includeContent";s:4:"desc";s:27:"tickets_prop_includeContent";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:0;s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:13:"toPlaceholder";a:7:{s:4:"name";s:13:"toPlaceholder";s:4:"desc";s:26:"tickets_prop_toPlaceholder";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:5:"where";a:7:{s:4:"name";s:5:"where";s:4:"desc";s:18:"tickets_prop_where";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:15:"outputSeparator";a:7:{s:4:"name";s:15:"outputSeparator";s:4:"desc";s:28:"tickets_prop_outputSeparator";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:1:"
";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:7:"showLog";a:7:{s:4:"name";s:7:"showLog";s:4:"desc";s:20:"tickets_prop_showLog";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:0;s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:15:"showUnpublished";a:7:{s:4:"name";s:15:"showUnpublished";s:4:"desc";s:28:"tickets_prop_showUnpublished";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:0;s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:11:"showDeleted";a:7:{s:4:"name";s:11:"showDeleted";s:4:"desc";s:24:"tickets_prop_showDeleted";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:0;s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}}',
      'moduleguid' => '',
      'static' => 0,
      'static_file' => 'core/components/tickets/elements/snippets/snippet.get_comments.php',
      'content' => '/* @var array $scriptProperties */
/* @var Tickets $Tickets */
$Tickets = $modx->getService(\'tickets\', \'Tickets\', $modx->getOption(\'tickets.core_path\', null, $modx->getOption(\'core_path\') . \'components/tickets/\') . \'model/tickets/\', $scriptProperties);
$Tickets->initialize($modx->context->key, $scriptProperties);

/** @var pdoFetch $pdoFetch */
$pdoFetch = $modx->getService(\'pdoFetch\');
$pdoFetch->setConfig($scriptProperties);
$pdoFetch->addTime(\'pdoTools loaded\');

$tpl = $modx->getOption(\'tpl\', $scriptProperties, \'tpl.Tickets.comment.list.row\');
$outputSeparator = $modx->getOption(\'outputSeparator\', $scriptProperties, "\\n");

// Define threads of comments
if (!empty($parents) || !empty($resources) || !empty($threads)) {
	$where = array();
	$options = array(
		\'innerJoin\' => array(
			\'Thread\' => array(
				\'class\' => \'TicketThread\',
				\'on\' => \'`Ticket`.`id` = `Thread`.`resource`\',
			)
		),
		\'groupby\' => \'`Ticket`.`id`\',
		\'select\' => array(\'Thread\' => \'`Thread`.`id`\'),
		\'showUnpublished\' => !empty($showUnpublished),
		\'showDeleted\' => !empty($showDeleted),
		\'depth\' => isset($depth)
			? (int)$depth
			: 10,
	);
	if (!empty($parents)) {
		$options[\'parents\'] = $parents;
	}
	if (!empty($resources)) {
		$options[\'resources\'] = $resources;
	}
	if (!empty($threads)) {
		$threads = array_map(\'trim\', explode(\',\', $threads));
		$threads_in = $threads_out = array();
		foreach ($threads as $v) {
			if (!is_numeric($v)) {
				continue;
			}
			if ($v[0] == \'-\') {
				$threads_out[] = abs($v);
			}
			else {
				$threads_in[] = abs($v);
			}
		}
		if (!empty($threads_in)) {
			$where[\'Thread.id:IN\'] = $threads_in;
		}
		if (!empty($threads_out)) {
			$where[\'Thread.id:NOT IN\'] = $threads_out;
		}
	}

	$rows = $pdoFetch->getCollection(\'Ticket\', $where, $options);
	$threads = array();
	foreach ($rows as $item) {
		$threads[] = $item[\'id\'];
	}
}

// Prepare query to db
$class = \'TicketComment\';
$where = array();
if (empty($showUnpublished)) {
	$where[\'published\'] = 1;
}
if (empty($showDeleted)) {
	$where[\'deleted\'] = 0;
}

// Filter by user
if (!empty($user)) {
	$user = array_map(\'trim\', explode(\',\', $user));
	$user_id = $user_username = array();
	foreach ($user as $v) {
		if (is_numeric($v)) {
			$user_id[] = $v;
		}
		else {
			$user_username[] = $v;
		}
	}
	if (!empty($user_id) && !empty($user_username)) {
		$where[] = \'(`User`.`id` IN (\' . implode(\',\', $user_id) . \') OR `User`.`username` IN (\\\'\' . implode(\'\\\',\\\'\', $user_username) . \'\\\'))\';
	}
	elseif (!empty($user_id)) {
		$where[\'User.id:IN\'] = $user_id;
	}
	elseif (!empty($user_username)) {
		$where[\'User.username:IN\'] = $user_username;
	}
}
// Filter by threads
if (!empty($threads)) {
	$where[\'thread:IN\'] = $threads;
}
// Filter by comments
if (!empty($comments)) {
	$comments = array_map(\'trim\', explode(\',\', $comments));
	$comments_in = $comments_out = array();
	foreach ($comments as $v) {
		if (!is_numeric($v)) {
			continue;
		}
		if ($v[0] == \'-\') {
			$comments_out[] = abs($v);
		}
		else {
			$comments_in[] = abs($v);
		}
	}
	if (!empty($comments_in)) {
		$where[\'id:IN\'] = $comments_in;
	}
	if (!empty($comments_out)) {
		$where[\'id:NOT IN\'] = $comments_out;
	}
}

// Joining tables
$innerJoin = array(
	\'Thread\' => array(
		\'class\' => \'TicketThread\',
		\'on\' => \'`Thread`.`id` = `TicketComment`.`thread`\'
	)
);
$leftJoin = array(
	\'User\' => array(\'class\' => \'modUser\', \'on\' => \'`User`.`id` = `TicketComment`.`createdby`\'),
	\'Profile\' => array(\'class\' => \'modUserProfile\', \'on\' => \'`Profile`.`internalKey` = `TicketComment`.`createdby`\'),
	\'Ticket\' => array(\'class\' => \'Ticket\', \'on\' => \'`Ticket`.`id` = `Thread`.`resource`\'),
	\'Section\' => array(\'class\' => \'TicketsSection\', \'on\' => \'`Section`.`id` = `Ticket`.`parent`\'),
);
if ($Tickets->authenticated) {
	$leftJoin[\'Vote\'] = array(
		\'class\' => \'TicketVote\',
		\'on\' => \'`Vote`.`id` = `TicketComment`.`id` AND `Vote`.`class` = "TicketComment" AND `Vote`.`createdby` = \' . $modx->user->id
	);
	$leftJoin[\'Star\'] = array(
		\'class\' => \'TicketStar\',
		\'on\' => \'`Star`.`id` = `TicketComment`.`id` AND `Star`.`class` = "TicketComment" AND `Star`.`createdby` = \' . $modx->user->id
	);
}
// Fields to select
$select = array(
	\'TicketComment\' => $modx->getSelectColumns(\'TicketComment\', \'TicketComment\', \'\', array(\'raw\'), true) . \', `rating` as `rating_total`\',
	\'Thread\' => \'`Thread`.`resource`\',
	\'User\' => \'`User`.`username`\',
	\'Profile\' => $modx->getSelectColumns(\'modUserProfile\', \'Profile\', \'\', array(\'id\', \'email\'), true) . \',`Profile`.`email` as `user_email`\',
	\'Ticket\' => !empty($includeContent)
		? $modx->getSelectColumns(\'Ticket\', \'Ticket\', \'ticket.\')
		: $modx->getSelectColumns(\'Ticket\', \'Ticket\', \'ticket.\', array(\'content\'), true),
	\'Section\' => !empty($includeContent)
		? $modx->getSelectColumns(\'TicketsSection\', \'Section\', \'section.\')
		: $modx->getSelectColumns(\'TicketsSection\', \'Section\', \'section.\', array(\'content\'), true),
);
if ($Tickets->authenticated) {
	$select[\'Vote\'] = \'`Vote`.`value` as `vote`\';
	$select[\'Star\'] = \'COUNT(`Star`.`id`) as `star`\';
}

// Add custom parameters
foreach (array(\'where\', \'select\', \'leftJoin\', \'innerJoin\') as $v) {
	if (!empty($scriptProperties[$v])) {
		$tmp = $modx->fromJSON($scriptProperties[$v]);
		if (is_array($tmp)) {
			$$v = array_merge($$v, $tmp);
		}
	}
	unset($scriptProperties[$v]);
}
$pdoFetch->addTime(\'Conditions prepared\');

$default = array(
	\'class\' => $class,
	\'where\' => $modx->toJSON($where),
	\'innerJoin\' => $modx->toJSON($innerJoin),
	\'leftJoin\' => $modx->toJSON($leftJoin),
	\'select\' => $modx->toJSON($select),
	\'sortby\' => $class . \'.createdon\',
	\'sortdir\' => \'DESC\',
	\'groupby\' => $class . \'.id\',
	\'fastMode\' => true,
	\'return\' => \'data\',
	\'nestedChunkPrefix\' => \'tickets_\',
);

// Merge all properties and run!
$pdoFetch->setConfig(array_merge($default, $scriptProperties), false);
$pdoFetch->addTime(\'Query parameters prepared.\');
$rows = $pdoFetch->run();

$output = array();
if (!empty($rows)) {
	foreach ($rows as $row) {
		$row[\'comments\'] = $modx->getCount(\'TicketComment\', array(\'published\' => 1, \'thread\' => $row[\'thread\']));;
		$output[] = $Tickets->templateNode($row, $tpl);
	}
}
$pdoFetch->addTime(\'Returning processed chunks\');
$output = implode($outputSeparator, $output);

$log = \'\';
if ($modx->user->hasSessionContext(\'mgr\') && !empty($showLog)) {
	$log .= \'<pre class="getCommentsLog">\' . print_r($pdoFetch->getTime(), 1) . \'</pre>\';
}

// Return output
if (!empty($toSeparatePlaceholders)) {
	$output[\'log\'] = $log;
	$modx->setPlaceholders($output, $toSeparatePlaceholders);
}
else {
	$output .= $log;

	if (!empty($tplWrapper) && (!empty($wrapIfEmpty) || !empty($output))) {
		$output = $pdoFetch->getChunk($tplWrapper, array(\'output\' => $output), $pdoFetch->config[\'fastMode\']);
	}

	if (!empty($toPlaceholder)) {
		$modx->setPlaceholder($toPlaceholder, $output);
	}
	else {
		return $output;
	}
}',
    ),
  ),
  '9cbc6fe5b9e32c348ba589de347ad05c' => 
  array (
    'criteria' => 
    array (
      'name' => 'getStars',
    ),
    'object' => 
    array (
      'id' => 56,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'getStars',
      'description' => '',
      'editor_type' => 0,
      'category' => 12,
      'cache_type' => 0,
      'snippet' => '/** @var array $scriptProperties */
if (empty($class)) {
	$class = \'Ticket\';
}
/** @var integer $user */
if (empty($user)) {
	$user = $modx->user->get(\'id\');
}
unset($scriptProperties[\'user\']);

$ids = array();
$q = $modx->newQuery(\'TicketStar\', array(\'class\' => $class, \'createdby\' => $user));
$q->select(\'id\');
$tstart = microtime(true);
if ($q->prepare() && $q->stmt->execute()) {
	$modx->queryTime = microtime(true) - $tstart;
	$modx->executedQueries++;

	$ids = $q->stmt->fetchAll(PDO::FETCH_COLUMN);
}

if (empty($ids)) {
	return false;
}

$where = array($class . \'.id:IN\' => $ids);
if (!empty($scriptProperties[\'where\'])) {
	$tmp = $modx->fromJSON($scriptProperties[\'where\']);
	if (is_array($tmp)) {
		$where = array_merge($where, $tmp);
	}
}
$scriptProperties[\'where\'] = $modx->toJSON($where);
if (empty($parents)) {
	$scriptProperties[\'parents\'] = 0;
}
if (empty($tpl)) {
	unset($scriptProperties[\'tpl\']);
}

return $class == \'Ticket\'
	? $modx->runSnippet(\'getTickets\', $scriptProperties)
	: $modx->runSnippet(\'getComments\', $scriptProperties);',
      'locked' => 0,
      'properties' => 'a:2:{s:5:"class";a:7:{s:4:"name";s:5:"class";s:4:"desc";s:18:"tickets_prop_class";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:6:"Ticket";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:3:"tpl";a:7:{s:4:"name";s:3:"tpl";s:4:"desc";s:16:"tickets_prop_tpl";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}}',
      'moduleguid' => '',
      'static' => 0,
      'static_file' => 'core/components/tickets/elements/snippets/snippet.get_stars.php',
      'content' => '/** @var array $scriptProperties */
if (empty($class)) {
	$class = \'Ticket\';
}
/** @var integer $user */
if (empty($user)) {
	$user = $modx->user->get(\'id\');
}
unset($scriptProperties[\'user\']);

$ids = array();
$q = $modx->newQuery(\'TicketStar\', array(\'class\' => $class, \'createdby\' => $user));
$q->select(\'id\');
$tstart = microtime(true);
if ($q->prepare() && $q->stmt->execute()) {
	$modx->queryTime = microtime(true) - $tstart;
	$modx->executedQueries++;

	$ids = $q->stmt->fetchAll(PDO::FETCH_COLUMN);
}

if (empty($ids)) {
	return false;
}

$where = array($class . \'.id:IN\' => $ids);
if (!empty($scriptProperties[\'where\'])) {
	$tmp = $modx->fromJSON($scriptProperties[\'where\']);
	if (is_array($tmp)) {
		$where = array_merge($where, $tmp);
	}
}
$scriptProperties[\'where\'] = $modx->toJSON($where);
if (empty($parents)) {
	$scriptProperties[\'parents\'] = 0;
}
if (empty($tpl)) {
	unset($scriptProperties[\'tpl\']);
}

return $class == \'Ticket\'
	? $modx->runSnippet(\'getTickets\', $scriptProperties)
	: $modx->runSnippet(\'getComments\', $scriptProperties);',
    ),
  ),
  '705ec544834b3257000c67b976615f17' => 
  array (
    'criteria' => 
    array (
      'name' => 'Tickets',
    ),
    'object' => 
    array (
      'id' => 15,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'Tickets',
      'description' => '',
      'editor_type' => 0,
      'category' => 12,
      'cache_type' => 0,
      'plugincode' => 'switch ($modx->event->name) {

	case \'OnSiteRefresh\':
		if ($modx->cacheManager->refresh(array(\'default/tickets\' => array()))) {
			$modx->log(modX::LOG_LEVEL_INFO, $modx->lexicon(\'refresh_default\') . \': Tickets\');
		}
		break;


	case \'OnDocFormSave\':
		/* @var Ticket $resource */
		if ($mode == \'new\' && $resource->class_key == "Ticket") {
			$modx->cacheManager->delete(\'tickets/latest.tickets\');
		}
		/* @var TicketsSection $resource */
		if ($mode == \'upd\' && $resource->class_key == \'TicketsSection\') {
			if (method_exists($resource, \'clearCache\')) {
				$resource->clearCache();
			}
		}
		break;


	case \'OnWebPagePrerender\':
		$output = &$modx->resource->_output;
		$output = str_replace(
			array(\'*(*(*(*(*(*\', \'*)*)*)*)*)*\', \'~(~(~(~(~(~\', \'~)~)~)~)~)~\'),
			array(\'[\', \']\', \'{\', \'}\'),
			$output
		);
		break;


	case \'OnPageNotFound\':
		// It is working only with friendly urls enabled
		$q = trim(@$_REQUEST[$modx->context->getOption(\'request_param_alias\', \'q\')]);
		$matches = explode(\'/\', rtrim($q, \'/\'));
		if (count($matches) < 2) {
			return;
		}

		$ticket_uri = array_pop($matches);
		$section_uri = implode(\'/\', $matches) . \'/\';

		if ($section_id = $modx->findResource($section_uri)) {
			/** @var TicketsSection $section */
			if ($section = $modx->getObject(\'TicketsSection\', $section_id)) {
				if (is_numeric($ticket_uri)) {
					$ticket_id = $ticket_uri;
				}
				elseif (preg_match(\'#^\\d+#\', $ticket_uri, $tmp)) {
					$ticket_id = $tmp[0];
				}
				else {
					$properties = $section->getProperties(\'tickets\');
					if (!empty($properties[\'uri\']) && strpos($properties[\'uri\'], \'%id\') !== false) {
						$pcre = str_replace(\'%id\', \'([0-9]+)\', $properties[\'uri\']);
						$pcre = preg_replace(\'#(\\%[a-z]+)#\', \'(?:.*?)\', $pcre);
						if (preg_match($pcre, $ticket_uri, $matches)) {
							$ticket_id = $matches[1];
						}
					}
				}
				if (!empty($ticket_id)) {
					if ($ticket = $modx->getObject(\'Ticket\', array(\'id\' => $ticket_id, \'deleted\' => 0))) {
						if ($ticket->published) {
							$modx->sendRedirect($modx->makeUrl($ticket_id), array(\'responseCode\' => \'HTTP/1.1 301 Moved Permanently\'));
						}
						elseif ($unp_id = $modx->getOption(\'tickets.unpublished_ticket_page\')) {
							$modx->sendForward($unp_id);
						}
					}
				}
			}
		}
		break;


	case \'OnLoadWebDocument\':
		$authenticated = $modx->user->isAuthenticated($modx->context->get(\'key\'));
		$key = \'Tickets_User\';

		if (!$authenticated && !$modx->getOption(\'tickets.count_guests\')) {
			return;
		}

		if (empty($_COOKIE[$key])) {
			if (!empty($_SESSION[$key])) {
				$guest_key = $_SESSION[$key];
			}
			else {
				$guest_key = $_SESSION[$key] = md5(rand() . time() . rand());
			}
			setcookie($key, $guest_key, time() + (86400 * 365), \'/\');
		}
		else {
			$guest_key = $_COOKIE[$key];
		}

		if (empty($_SESSION[$key])) {
			$_SESSION[$key] = $guest_key;
		}

		if ($authenticated) {
			/** @var TicketAuthor $profile */
			if (!$profile = $modx->user->getOne(\'AuthorProfile\')) {
				$profile = $modx->newObject(\'TicketAuthor\');
				$modx->user->addOne($profile);
			}
			$profile->set(\'visitedon\', time());
			$profile->save();
		}
		break;


	case \'OnWebPageComplete\':
		/** @var Tickets $Tickets */
		$Tickets = $modx->getService(\'tickets\');
		$Tickets->logView($modx->resource->get(\'id\'));
		break;


	case \'OnUserSave\':
		/** @var modUser $user */
		if ($mode == \'new\' && $user && !$user->getOne(\'AuthorProfile\')) {
			$profile = $modx->newObject(\'TicketAuthor\');
			$user->addOne($profile);
			$profile->save();
		}
		break;

}',
      'locked' => 0,
      'properties' => NULL,
      'disabled' => 0,
      'moduleguid' => '',
      'static' => 0,
      'static_file' => 'core/components/tickets/elements/plugins/plugin.tickets.php',
      'content' => 'switch ($modx->event->name) {

	case \'OnSiteRefresh\':
		if ($modx->cacheManager->refresh(array(\'default/tickets\' => array()))) {
			$modx->log(modX::LOG_LEVEL_INFO, $modx->lexicon(\'refresh_default\') . \': Tickets\');
		}
		break;


	case \'OnDocFormSave\':
		/* @var Ticket $resource */
		if ($mode == \'new\' && $resource->class_key == "Ticket") {
			$modx->cacheManager->delete(\'tickets/latest.tickets\');
		}
		/* @var TicketsSection $resource */
		if ($mode == \'upd\' && $resource->class_key == \'TicketsSection\') {
			if (method_exists($resource, \'clearCache\')) {
				$resource->clearCache();
			}
		}
		break;


	case \'OnWebPagePrerender\':
		$output = &$modx->resource->_output;
		$output = str_replace(
			array(\'*(*(*(*(*(*\', \'*)*)*)*)*)*\', \'~(~(~(~(~(~\', \'~)~)~)~)~)~\'),
			array(\'[\', \']\', \'{\', \'}\'),
			$output
		);
		break;


	case \'OnPageNotFound\':
		// It is working only with friendly urls enabled
		$q = trim(@$_REQUEST[$modx->context->getOption(\'request_param_alias\', \'q\')]);
		$matches = explode(\'/\', rtrim($q, \'/\'));
		if (count($matches) < 2) {
			return;
		}

		$ticket_uri = array_pop($matches);
		$section_uri = implode(\'/\', $matches) . \'/\';

		if ($section_id = $modx->findResource($section_uri)) {
			/** @var TicketsSection $section */
			if ($section = $modx->getObject(\'TicketsSection\', $section_id)) {
				if (is_numeric($ticket_uri)) {
					$ticket_id = $ticket_uri;
				}
				elseif (preg_match(\'#^\\d+#\', $ticket_uri, $tmp)) {
					$ticket_id = $tmp[0];
				}
				else {
					$properties = $section->getProperties(\'tickets\');
					if (!empty($properties[\'uri\']) && strpos($properties[\'uri\'], \'%id\') !== false) {
						$pcre = str_replace(\'%id\', \'([0-9]+)\', $properties[\'uri\']);
						$pcre = preg_replace(\'#(\\%[a-z]+)#\', \'(?:.*?)\', $pcre);
						if (preg_match($pcre, $ticket_uri, $matches)) {
							$ticket_id = $matches[1];
						}
					}
				}
				if (!empty($ticket_id)) {
					if ($ticket = $modx->getObject(\'Ticket\', array(\'id\' => $ticket_id, \'deleted\' => 0))) {
						if ($ticket->published) {
							$modx->sendRedirect($modx->makeUrl($ticket_id), array(\'responseCode\' => \'HTTP/1.1 301 Moved Permanently\'));
						}
						elseif ($unp_id = $modx->getOption(\'tickets.unpublished_ticket_page\')) {
							$modx->sendForward($unp_id);
						}
					}
				}
			}
		}
		break;


	case \'OnLoadWebDocument\':
		$authenticated = $modx->user->isAuthenticated($modx->context->get(\'key\'));
		$key = \'Tickets_User\';

		if (!$authenticated && !$modx->getOption(\'tickets.count_guests\')) {
			return;
		}

		if (empty($_COOKIE[$key])) {
			if (!empty($_SESSION[$key])) {
				$guest_key = $_SESSION[$key];
			}
			else {
				$guest_key = $_SESSION[$key] = md5(rand() . time() . rand());
			}
			setcookie($key, $guest_key, time() + (86400 * 365), \'/\');
		}
		else {
			$guest_key = $_COOKIE[$key];
		}

		if (empty($_SESSION[$key])) {
			$_SESSION[$key] = $guest_key;
		}

		if ($authenticated) {
			/** @var TicketAuthor $profile */
			if (!$profile = $modx->user->getOne(\'AuthorProfile\')) {
				$profile = $modx->newObject(\'TicketAuthor\');
				$modx->user->addOne($profile);
			}
			$profile->set(\'visitedon\', time());
			$profile->save();
		}
		break;


	case \'OnWebPageComplete\':
		/** @var Tickets $Tickets */
		$Tickets = $modx->getService(\'tickets\');
		$Tickets->logView($modx->resource->get(\'id\'));
		break;


	case \'OnUserSave\':
		/** @var modUser $user */
		if ($mode == \'new\' && $user && !$user->getOne(\'AuthorProfile\')) {
			$profile = $modx->newObject(\'TicketAuthor\');
			$user->addOne($profile);
			$profile->save();
		}
		break;

}',
    ),
  ),
  '2b6ed078c628ed1e89fa533d91e0bff2' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 15,
      'event' => 'OnDocFormSave',
    ),
    'object' => 
    array (
      'pluginid' => 15,
      'event' => 'OnDocFormSave',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
  '98404b3143cd02f22a03eb85a9304d52' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 15,
      'event' => 'OnSiteRefresh',
    ),
    'object' => 
    array (
      'pluginid' => 15,
      'event' => 'OnSiteRefresh',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
  '9e353f5136cdc40bf6600e23c3b23f00' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 15,
      'event' => 'OnWebPagePrerender',
    ),
    'object' => 
    array (
      'pluginid' => 15,
      'event' => 'OnWebPagePrerender',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
  '0214fac52e0295363d18370968c969b7' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 15,
      'event' => 'OnPageNotFound',
    ),
    'object' => 
    array (
      'pluginid' => 15,
      'event' => 'OnPageNotFound',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
  'b61e3a02fc16b03c2717ca0ae8025289' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 15,
      'event' => 'OnLoadWebDocument',
    ),
    'object' => 
    array (
      'pluginid' => 15,
      'event' => 'OnLoadWebDocument',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
  '5930208d9fb8d8b470f4860d71b8deb6' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 15,
      'event' => 'OnWebPageComplete',
    ),
    'object' => 
    array (
      'pluginid' => 15,
      'event' => 'OnWebPageComplete',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
  'b3004a8cb04c6add5541f1e41c6cba0f' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 15,
      'event' => 'OnEmptyTrash',
    ),
    'object' => 
    array (
      'pluginid' => 15,
      'event' => 'OnEmptyTrash',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
  '8180baa04c8a089acf4f82136dd7f41b' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 15,
      'event' => 'OnUserSave',
    ),
    'object' => 
    array (
      'pluginid' => 15,
      'event' => 'OnUserSave',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
);