
<?php
use Illuminate\Database\Seeder;
class DefaultSeeder extends Seeder
{
    public function run()
    {
        $this->command->info('Please wait updating the data...');                
        $this->call('DefaultData');        
        $this->command->info('Updating the data completed !');
    }
}
class DefaultData extends Seeder {
    public function run() {        
    	DB::table('class')->insert([0=>['id'=>1,'name'=>'10 A','homeroom_teacher'=>'Mariana S.Pd','created_at'=>'2018-01-15 23:47:13','updated_at'=>NULL,'deleted_at'=>NULL],1=>['id'=>2,'name'=>'10 B','homeroom_teacher'=>'Susilo S.Pd','created_at'=>'2018-01-15 23:47:25','updated_at'=>NULL,'deleted_at'=>NULL],2=>['id'=>3,'name'=>'10 C','homeroom_teacher'=>'Sugiman S.Pd','created_at'=>'2018-01-15 23:47:37','updated_at'=>NULL,'deleted_at'=>NULL]]);
			DB::table('cms_email_templates')->insert([0=>['id'=>1,'name'=>'Email Template Forgot Password Backend','slug'=>'forgot_password_backend','subject'=>NULL,'content'=>'<p>Hi,</p><p>Someone requested forgot password, here is your new password : </p><p>[password]</p><p><br></p><p>--</p><p>Regards,</p><p>Admin</p>','description'=>'[password]','from_name'=>'System','from_email'=>'system@crudbooster.com','cc_email'=>NULL,'created_at'=>'2018-01-15 03:03:02','updated_at'=>NULL]]);
			DB::table('cms_menus')->insert([0=>['id'=>1,'name'=>'Students','type'=>'Route','path'=>'AdminStudentsControllerGetIndex','color'=>NULL,'icon'=>'fa fa-users','parent_id'=>0,'is_active'=>1,'is_dashboard'=>0,'id_cms_privileges'=>1,'sorting'=>2,'created_at'=>'2018-01-15 11:42:58','updated_at'=>NULL],1=>['id'=>2,'name'=>'Class','type'=>'Route','path'=>'AdminClassControllerGetIndex','color'=>NULL,'icon'=>'fa fa-graduation-cap','parent_id'=>0,'is_active'=>1,'is_dashboard'=>0,'id_cms_privileges'=>1,'sorting'=>3,'created_at'=>'2018-01-15 11:45:58','updated_at'=>NULL],2=>['id'=>3,'name'=>'Exams','type'=>'Route','path'=>'AdminExamsControllerGetIndex','color'=>NULL,'icon'=>'fa fa-book','parent_id'=>0,'is_active'=>1,'is_dashboard'=>0,'id_cms_privileges'=>1,'sorting'=>1,'created_at'=>'2018-01-15 12:08:00','updated_at'=>NULL],3=>['id'=>4,'name'=>'Lessons','type'=>'Route','path'=>'AdminLessonControllerGetIndex','color'=>NULL,'icon'=>'fa fa-bars','parent_id'=>0,'is_active'=>1,'is_dashboard'=>0,'id_cms_privileges'=>1,'sorting'=>4,'created_at'=>'2018-01-15 12:10:24','updated_at'=>NULL],4=>['id'=>5,'name'=>'Dashboard','type'=>'Statistic','path'=>'statistic_builder/show/dashboard','color'=>'normal','icon'=>'fa fa-dashboard','parent_id'=>0,'is_active'=>1,'is_dashboard'=>1,'id_cms_privileges'=>1,'sorting'=>NULL,'created_at'=>'2018-01-15 13:53:12','updated_at'=>NULL]]);
			DB::table('cms_menus_privileges')->insert([0=>['id'=>1,'id_cms_menus'=>1,'id_cms_privileges'=>1],1=>['id'=>2,'id_cms_menus'=>2,'id_cms_privileges'=>1],2=>['id'=>3,'id_cms_menus'=>3,'id_cms_privileges'=>1],3=>['id'=>4,'id_cms_menus'=>4,'id_cms_privileges'=>1],4=>['id'=>5,'id_cms_menus'=>5,'id_cms_privileges'=>1]]);
			DB::table('cms_moduls')->insert([0=>['id'=>1,'name'=>'Notifications','icon'=>'fa fa-cog','path'=>'notifications','table_name'=>'cms_notifications','controller'=>'NotificationsController','is_protected'=>1,'is_active'=>1,'created_at'=>'2018-01-15 03:03:00','updated_at'=>NULL,'deleted_at'=>NULL],1=>['id'=>2,'name'=>'Privileges','icon'=>'fa fa-cog','path'=>'privileges','table_name'=>'cms_privileges','controller'=>'PrivilegesController','is_protected'=>1,'is_active'=>1,'created_at'=>'2018-01-15 03:03:00','updated_at'=>NULL,'deleted_at'=>NULL],2=>['id'=>3,'name'=>'Privileges Roles','icon'=>'fa fa-cog','path'=>'privileges_roles','table_name'=>'cms_privileges_roles','controller'=>'PrivilegesRolesController','is_protected'=>1,'is_active'=>1,'created_at'=>'2018-01-15 03:03:00','updated_at'=>NULL,'deleted_at'=>NULL],3=>['id'=>4,'name'=>'Users Management','icon'=>'fa fa-users','path'=>'users','table_name'=>'cms_users','controller'=>'AdminCmsUsersController','is_protected'=>0,'is_active'=>1,'created_at'=>'2018-01-15 03:03:00','updated_at'=>NULL,'deleted_at'=>NULL],4=>['id'=>5,'name'=>'Settings','icon'=>'fa fa-cog','path'=>'settings','table_name'=>'cms_settings','controller'=>'SettingsController','is_protected'=>1,'is_active'=>1,'created_at'=>'2018-01-15 03:03:00','updated_at'=>NULL,'deleted_at'=>NULL],5=>['id'=>6,'name'=>'Module Generator','icon'=>'fa fa-database','path'=>'module_generator','table_name'=>'cms_moduls','controller'=>'ModulsController','is_protected'=>1,'is_active'=>1,'created_at'=>'2018-01-15 03:03:00','updated_at'=>NULL,'deleted_at'=>NULL],6=>['id'=>7,'name'=>'Menu Management','icon'=>'fa fa-bars','path'=>'menu_management','table_name'=>'cms_menus','controller'=>'MenusController','is_protected'=>1,'is_active'=>1,'created_at'=>'2018-01-15 03:03:00','updated_at'=>NULL,'deleted_at'=>NULL],7=>['id'=>8,'name'=>'Email Templates','icon'=>'fa fa-envelope-o','path'=>'email_templates','table_name'=>'cms_email_templates','controller'=>'EmailTemplatesController','is_protected'=>1,'is_active'=>1,'created_at'=>'2018-01-15 03:03:00','updated_at'=>NULL,'deleted_at'=>NULL],8=>['id'=>9,'name'=>'Statistic Builder','icon'=>'fa fa-dashboard','path'=>'statistic_builder','table_name'=>'cms_statistics','controller'=>'StatisticBuilderController','is_protected'=>1,'is_active'=>1,'created_at'=>'2018-01-15 03:03:00','updated_at'=>NULL,'deleted_at'=>NULL],9=>['id'=>10,'name'=>'API Generator','icon'=>'fa fa-cloud-download','path'=>'api_generator','table_name'=>'','controller'=>'ApiCustomController','is_protected'=>1,'is_active'=>1,'created_at'=>'2018-01-15 03:03:00','updated_at'=>NULL,'deleted_at'=>NULL],10=>['id'=>11,'name'=>'Log User Access','icon'=>'fa fa-flag-o','path'=>'logs','table_name'=>'cms_logs','controller'=>'LogsController','is_protected'=>1,'is_active'=>1,'created_at'=>'2018-01-15 03:03:00','updated_at'=>NULL,'deleted_at'=>NULL],11=>['id'=>12,'name'=>'Students','icon'=>'fa fa-users','path'=>'students','table_name'=>'students','controller'=>'AdminStudentsController','is_protected'=>0,'is_active'=>0,'created_at'=>'2018-01-15 11:42:57','updated_at'=>NULL,'deleted_at'=>NULL],12=>['id'=>13,'name'=>'Class','icon'=>'fa fa-graduation-cap','path'=>'class','table_name'=>'class','controller'=>'AdminClassController','is_protected'=>0,'is_active'=>0,'created_at'=>'2018-01-15 11:45:58','updated_at'=>NULL,'deleted_at'=>NULL],13=>['id'=>14,'name'=>'Exams','icon'=>'fa fa-book','path'=>'exams','table_name'=>'exams','controller'=>'AdminExamsController','is_protected'=>0,'is_active'=>0,'created_at'=>'2018-01-15 12:07:59','updated_at'=>NULL,'deleted_at'=>NULL],14=>['id'=>15,'name'=>'Lessons','icon'=>'fa fa-bars','path'=>'lesson','table_name'=>'lesson','controller'=>'AdminLessonController','is_protected'=>0,'is_active'=>0,'created_at'=>'2018-01-15 12:10:24','updated_at'=>NULL,'deleted_at'=>NULL]]);
			DB::table('cms_privileges')->insert([0=>['id'=>1,'name'=>'Super Administrator','is_superadmin'=>1,'theme_color'=>'skin-green-light','created_at'=>'2018-01-15 03:03:00','updated_at'=>NULL]]);
			DB::table('cms_privileges_roles')->insert([0=>['id'=>1,'is_visible'=>1,'is_create'=>0,'is_read'=>0,'is_edit'=>0,'is_delete'=>0,'id_cms_privileges'=>1,'id_cms_moduls'=>1,'created_at'=>'2018-01-15 03:03:00','updated_at'=>NULL],1=>['id'=>2,'is_visible'=>1,'is_create'=>1,'is_read'=>1,'is_edit'=>1,'is_delete'=>1,'id_cms_privileges'=>1,'id_cms_moduls'=>2,'created_at'=>'2018-01-15 03:03:00','updated_at'=>NULL],2=>['id'=>3,'is_visible'=>0,'is_create'=>1,'is_read'=>1,'is_edit'=>1,'is_delete'=>1,'id_cms_privileges'=>1,'id_cms_moduls'=>3,'created_at'=>'2018-01-15 03:03:00','updated_at'=>NULL],3=>['id'=>4,'is_visible'=>1,'is_create'=>1,'is_read'=>1,'is_edit'=>1,'is_delete'=>1,'id_cms_privileges'=>1,'id_cms_moduls'=>4,'created_at'=>'2018-01-15 03:03:00','updated_at'=>NULL],4=>['id'=>5,'is_visible'=>1,'is_create'=>1,'is_read'=>1,'is_edit'=>1,'is_delete'=>1,'id_cms_privileges'=>1,'id_cms_moduls'=>5,'created_at'=>'2018-01-15 03:03:00','updated_at'=>NULL],5=>['id'=>6,'is_visible'=>1,'is_create'=>1,'is_read'=>1,'is_edit'=>1,'is_delete'=>1,'id_cms_privileges'=>1,'id_cms_moduls'=>6,'created_at'=>'2018-01-15 03:03:00','updated_at'=>NULL],6=>['id'=>7,'is_visible'=>1,'is_create'=>1,'is_read'=>1,'is_edit'=>1,'is_delete'=>1,'id_cms_privileges'=>1,'id_cms_moduls'=>7,'created_at'=>'2018-01-15 03:03:00','updated_at'=>NULL],7=>['id'=>8,'is_visible'=>1,'is_create'=>1,'is_read'=>1,'is_edit'=>1,'is_delete'=>1,'id_cms_privileges'=>1,'id_cms_moduls'=>8,'created_at'=>'2018-01-15 03:03:00','updated_at'=>NULL],8=>['id'=>9,'is_visible'=>1,'is_create'=>1,'is_read'=>1,'is_edit'=>1,'is_delete'=>1,'id_cms_privileges'=>1,'id_cms_moduls'=>9,'created_at'=>'2018-01-15 03:03:00','updated_at'=>NULL],9=>['id'=>10,'is_visible'=>1,'is_create'=>1,'is_read'=>1,'is_edit'=>1,'is_delete'=>1,'id_cms_privileges'=>1,'id_cms_moduls'=>10,'created_at'=>'2018-01-15 03:03:00','updated_at'=>NULL],10=>['id'=>11,'is_visible'=>1,'is_create'=>0,'is_read'=>1,'is_edit'=>0,'is_delete'=>1,'id_cms_privileges'=>1,'id_cms_moduls'=>11,'created_at'=>'2018-01-15 03:03:00','updated_at'=>NULL],11=>['id'=>12,'is_visible'=>1,'is_create'=>1,'is_read'=>1,'is_edit'=>1,'is_delete'=>1,'id_cms_privileges'=>1,'id_cms_moduls'=>12,'created_at'=>NULL,'updated_at'=>NULL],12=>['id'=>13,'is_visible'=>1,'is_create'=>1,'is_read'=>1,'is_edit'=>1,'is_delete'=>1,'id_cms_privileges'=>1,'id_cms_moduls'=>13,'created_at'=>NULL,'updated_at'=>NULL],13=>['id'=>14,'is_visible'=>1,'is_create'=>1,'is_read'=>1,'is_edit'=>1,'is_delete'=>1,'id_cms_privileges'=>1,'id_cms_moduls'=>14,'created_at'=>NULL,'updated_at'=>NULL],14=>['id'=>15,'is_visible'=>1,'is_create'=>1,'is_read'=>1,'is_edit'=>1,'is_delete'=>1,'id_cms_privileges'=>1,'id_cms_moduls'=>15,'created_at'=>NULL,'updated_at'=>NULL]]);
			DB::table('cms_settings')->insert([0=>['id'=>1,'name'=>'login_background_color','content'=>NULL,'content_input_type'=>'text','dataenum'=>NULL,'helper'=>'Input hexacode','created_at'=>'2018-01-15 03:03:01','updated_at'=>NULL,'group_setting'=>'Login Register Style','label'=>'Login Background Color'],1=>['id'=>2,'name'=>'login_font_color','content'=>NULL,'content_input_type'=>'text','dataenum'=>NULL,'helper'=>'Input hexacode','created_at'=>'2018-01-15 03:03:01','updated_at'=>NULL,'group_setting'=>'Login Register Style','label'=>'Login Font Color'],2=>['id'=>3,'name'=>'login_background_image','content'=>'uploads/2018-01/e39b03386697123eb23bc2c8903f8c49.jpg','content_input_type'=>'upload_image','dataenum'=>NULL,'helper'=>NULL,'created_at'=>'2018-01-15 03:03:01','updated_at'=>NULL,'group_setting'=>'Login Register Style','label'=>'Login Background Image'],3=>['id'=>4,'name'=>'email_sender','content'=>'support@crudbooster.com','content_input_type'=>'text','dataenum'=>NULL,'helper'=>NULL,'created_at'=>'2018-01-15 03:03:01','updated_at'=>NULL,'group_setting'=>'Email Setting','label'=>'Email Sender'],4=>['id'=>5,'name'=>'smtp_driver','content'=>'mail','content_input_type'=>'select','dataenum'=>'smtp,mail,sendmail','helper'=>NULL,'created_at'=>'2018-01-15 03:03:01','updated_at'=>NULL,'group_setting'=>'Email Setting','label'=>'Mail Driver'],5=>['id'=>6,'name'=>'smtp_host','content'=>'','content_input_type'=>'text','dataenum'=>NULL,'helper'=>NULL,'created_at'=>'2018-01-15 03:03:01','updated_at'=>NULL,'group_setting'=>'Email Setting','label'=>'SMTP Host'],6=>['id'=>7,'name'=>'smtp_port','content'=>'25','content_input_type'=>'text','dataenum'=>NULL,'helper'=>'default 25','created_at'=>'2018-01-15 03:03:01','updated_at'=>NULL,'group_setting'=>'Email Setting','label'=>'SMTP Port'],7=>['id'=>8,'name'=>'smtp_username','content'=>'','content_input_type'=>'text','dataenum'=>NULL,'helper'=>NULL,'created_at'=>'2018-01-15 03:03:01','updated_at'=>NULL,'group_setting'=>'Email Setting','label'=>'SMTP Username'],8=>['id'=>9,'name'=>'smtp_password','content'=>'','content_input_type'=>'text','dataenum'=>NULL,'helper'=>NULL,'created_at'=>'2018-01-15 03:03:01','updated_at'=>NULL,'group_setting'=>'Email Setting','label'=>'SMTP Password'],9=>['id'=>10,'name'=>'appname','content'=>'CRUDBooster Shop','content_input_type'=>'text','dataenum'=>NULL,'helper'=>NULL,'created_at'=>'2018-01-15 03:03:01','updated_at'=>NULL,'group_setting'=>'Application Setting','label'=>'Application Name'],10=>['id'=>11,'name'=>'default_paper_size','content'=>'Legal','content_input_type'=>'text','dataenum'=>NULL,'helper'=>'Paper size, ex : A4, Legal, etc','created_at'=>'2018-01-15 03:03:01','updated_at'=>NULL,'group_setting'=>'Application Setting','label'=>'Default Paper Print Size'],11=>['id'=>12,'name'=>'logo','content'=>NULL,'content_input_type'=>'upload_image','dataenum'=>NULL,'helper'=>NULL,'created_at'=>'2018-01-15 03:03:01','updated_at'=>NULL,'group_setting'=>'Application Setting','label'=>'Logo'],12=>['id'=>13,'name'=>'favicon','content'=>NULL,'content_input_type'=>'upload_image','dataenum'=>NULL,'helper'=>NULL,'created_at'=>'2018-01-15 03:03:01','updated_at'=>NULL,'group_setting'=>'Application Setting','label'=>'Favicon'],13=>['id'=>14,'name'=>'api_debug_mode','content'=>'true','content_input_type'=>'select','dataenum'=>'true,false','helper'=>NULL,'created_at'=>'2018-01-15 03:03:01','updated_at'=>NULL,'group_setting'=>'Application Setting','label'=>'API Debug Mode'],14=>['id'=>15,'name'=>'google_api_key','content'=>NULL,'content_input_type'=>'text','dataenum'=>NULL,'helper'=>NULL,'created_at'=>'2018-01-15 03:03:01','updated_at'=>NULL,'group_setting'=>'Application Setting','label'=>'Google API Key'],15=>['id'=>16,'name'=>'google_fcm_key','content'=>NULL,'content_input_type'=>'text','dataenum'=>NULL,'helper'=>NULL,'created_at'=>'2018-01-15 03:03:01','updated_at'=>NULL,'group_setting'=>'Application Setting','label'=>'Google FCM Key']]);
			DB::table('cms_statistic_components')->insert([0=>['id'=>1,'id_cms_statistics'=>1,'componentID'=>'e52b6c5449e03404d05a4573016beeb2','component_name'=>'smallbox','area_name'=>'area1','sorting'=>0,'name'=>NULL,'config'=>'{"name":"Students","icon":"ion-person-stalker","color":"bg-red","link":"http:\\/\\/crocodic.net\\/crudbooster_school\\/public\\/admin\\/students","sql":"select count(id) from `students`"}','created_at'=>'2018-01-15 13:44:11','updated_at'=>NULL],1=>['id'=>2,'id_cms_statistics'=>1,'componentID'=>'03c02968290840b6023c8bc6ac4ec847','component_name'=>'smallbox','area_name'=>'area2','sorting'=>0,'name'=>NULL,'config'=>'{"name":"Exams","icon":"ion-navicon","color":"bg-red","link":"http:\\/\\/crocodic.net\\/crudbooster_school\\/public\\/admin\\/exams","sql":"select count(id) from `exams`"}','created_at'=>'2018-01-15 13:46:46','updated_at'=>NULL],2=>['id'=>3,'id_cms_statistics'=>1,'componentID'=>'00fd45246169a660b189d0020ac26418','component_name'=>'smallbox','area_name'=>'area3','sorting'=>0,'name'=>NULL,'config'=>'{"name":"Class","icon":"ion-android-home","color":"bg-red","link":"http:\\/\\/crocodic.net\\/crudbooster_school\\/public\\/admin\\/class","sql":"select count(id) from `class`"}','created_at'=>'2018-01-15 13:49:35','updated_at'=>NULL],3=>['id'=>4,'id_cms_statistics'=>1,'componentID'=>'0d4307a667df89d6da22cf67471882b9','component_name'=>'smallbox','area_name'=>'area4','sorting'=>0,'name'=>NULL,'config'=>'{"name":"Lesson","icon":"ion-android-menu","color":"bg-red","link":"http:\\/\\/crocodic.net\\/crudbooster_school\\/public\\/admin\\/lesson","sql":"select count(id) from `lesson`"}','created_at'=>'2018-01-15 13:51:32','updated_at'=>NULL]]);
			DB::table('cms_statistics')->insert([0=>['id'=>1,'name'=>'Dashboard','slug'=>'dashboard','created_at'=>'2018-01-15 13:40:49','updated_at'=>NULL]]);
			DB::table('cms_users')->insert([0=>['id'=>1,'name'=>'Super Admin','photo'=>NULL,'email'=>'admin@crudbooster.com','password'=>'$2y$10$pYrQ62C1ZJFhHR4rLWEJ..OlGUFMjvqS849OrfoxoDwjFS8ZdGDFi','id_cms_privileges'=>1,'created_at'=>'2018-01-15 03:03:00','updated_at'=>NULL,'status'=>'Active']]);
			DB::table('exams')->insert([0=>['id'=>2,'id_class'=>1,'id_students'=>2,'description'=>'First Exams','result'=>'40','is_remidi'=>0,'id_lesson'=>3,'created_at'=>'2018-01-16 00:24:58','updated_at'=>NULL,'deleted_at'=>NULL],1=>['id'=>3,'id_class'=>2,'id_students'=>1,'description'=>'First Exams','result'=>'100','is_remidi'=>1,'id_lesson'=>3,'created_at'=>'2018-01-16 01:28:31','updated_at'=>NULL,'deleted_at'=>NULL],2=>['id'=>4,'id_class'=>1,'id_students'=>2,'description'=>'second exam','result'=>'100','is_remidi'=>1,'id_lesson'=>2,'created_at'=>'2018-01-16 01:33:24','updated_at'=>'2018-01-16 01:34:30','deleted_at'=>NULL]]);
			DB::table('lesson')->insert([0=>['id'=>1,'name'=>'mathematics','result_minimum'=>70,'created_at'=>'2018-01-16 00:10:36','updated_at'=>'2018-01-16 00:16:18','deleted_at'=>NULL],1=>['id'=>2,'name'=>'english','result_minimum'=>85,'created_at'=>'2018-01-16 00:11:49','updated_at'=>'2018-01-16 00:16:10','deleted_at'=>NULL],2=>['id'=>3,'name'=>'art and culture','result_minimum'=>75,'created_at'=>'2018-01-16 00:12:02','updated_at'=>'2018-01-16 00:16:02','deleted_at'=>NULL]]);
			DB::table('students')->insert([0=>['id'=>1,'id_class'=>1,'name'=>'Cristiano Ronaldo','age'=>15,'gender'=>'Male','address'=>'Warrington, Hampstead, Lancashire. London, N.W.3','photo'=>'uploads/1/2018-01/cr.jpg','created_at'=>'2018-01-15 23:55:21','updated_at'=>NULL,'deleted_at'=>NULL],1=>['id'=>2,'id_class'=>2,'name'=>'Angelina Cristie','age'=>14,'gender'=>'Female','address'=>'Byron House High St., Liverpool','photo'=>'uploads/1/2018-01/cew.jpg','created_at'=>'2018-01-15 23:56:20','updated_at'=>NULL,'deleted_at'=>NULL],2=>['id'=>3,'id_class'=>1,'name'=>'Agent','age'=>22,'gender'=>'Male','address'=>'Warrington, Hampstead, Lancashire. London, N.W.3','photo'=>'uploads/1/2018-01/cr.jpg','created_at'=>'2018-01-16 02:35:08','updated_at'=>NULL,'deleted_at'=>NULL]]);
			
    }
}
	