 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'landing-page/C_landing/';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
// Admin
// $route['login-admin.html'] = 'login/C_login';
// $route['auth-admin.json'] = 'login/C_login/auth';
// $route['admin-dashboard.html'] = 'admin/C_admin/index_dashboard';
// $route['admin-input-soal.html'] = 'admin/C_admin/index_soal';
// $route['admin-input-soal.json'] = 'admin/C_admin_action/insert_soal';
// $route['admin-import-responden.html'] = 'admin/C_admin/index_import_data';
// $route['admin-import-responden.json'] = 'admin/C_admin_action/insert_responden_excel';
// $route['admin-import-get.json'] = 'admin/C_admin_action/get_responden_import';
// $route['admin-whatsapp.html'] = 'admin/C_admin/index_whatsapp';

// $route['admin-kirim-video.json'] = 'admin/C_admin_action/kirim_video';
// Member
// $route['form-data-diri.html'] = 'landing-page/C_landing/index_form';
// $route['form-data-diri.json'] = 'landing-page/C_landing/daftar_member';
// $route['submit-survey-member.json'] = 'landing-page/C_landing/submit_survey_member';

// $route['survei-konten-kreator-form.html'] = 'landing-page/C_konten/index_form';
// $route['survei-konten-kreator-form.json'] = 'landing-page/C_konten/daftar_member';
// $route['survei-konten-kreator.html'] = 'landing-page/C_konten/index_survei';
// $route['survei-konten-kreator.json'] = 'landing-page/C_konten/submit_survey_member';

$route['mulai-survei.html'] = 'landing-page/C_landing/index_survey';
$route['api/lokasi/get-provinsi.json'] = 'landing-page/C_landing/get_provinsi';
$route['api/lokasi/get-kota.json'] = 'landing-page/C_landing/get_kota';
$route['api/lokasi/get-kecamatan.json'] = 'landing-page/C_landing/get_kecamatan';

$route['api/submit/survei.json'] = 'landing-page/C_landing/insert_survey';

// $route['admin-report-personalize.html'] = 'admin/C_report/index_personalize';
// $route['admin-report-konten-kreator.html'] = 'admin/C_report/index_kreator';