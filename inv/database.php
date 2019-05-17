$db['default']=array(
'dsn'=>",
'hostname'=>'localhost',
'username'=>'root',
'password'=>",
'database'=>'db_ci_3',
'dbdriver'=>'mysqli',
'dbprefix'=>",
'pconnect'=>FALSE,
'db_debug'=>TRUE,
'cache_on'=>FALSE,
'cachedir'=>",
$autoload['libraries'] = array('database');
$autoload['helper'] = array('url','form','file');
$autoload['model'] = array('modelku');
function cariData(){
$cari=$this->input->get('cari');
$beda['cari']=$this->modelku->cariSiswa($cari);
$this->load->view('v_cari',$beda);
}
)