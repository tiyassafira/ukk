<?php  
class datacrud extends CI_Model{
 function tampil_datasiswa(){
  return $this->db->get('rute');
 }
 
 function input_datasiswa($data,$table){
  $this->db->insert($table,$data);
 }
  function tampil_datarute(){
  	return $this->db->get('rute');
 } 
  function input_datarute($data,$table){
  $this->db->insert($table,$data);
 }
 function hapus_datarute($where,$table){
  $this->db->where($where);
  $this->db->delete($table);
 }
 function edit_datarute($where,$table){  
 	return $this->db->get_where($table,$where);
 }
 function update_datarute($where,$data,$table){
  $this->db->where($where);
  $this->db->update($table,$data);
 } 
 function tampil_maskapai(){
    return $this->db->get('transportation');
 } 
  function input_maskapai($data,$table){
  $this->db->insert($table,$data);
 }
 function hapus_maskapai($table,$where){
  $this->db->where($where);
  $this->db->delete($table);
 }
 function edit_maskapai($where,$table){  
  return $this->db->get_where($table,$where);
 }
 function update_maskapai($id,$data,$table){
  $this->db->where('id', $id);
  $this->db->update($table,$data);
 }
 function join_rute_maskapai(){
  $this->db->select('rute.ruteid, rute.depart_at, rute.rute_from, rute.rute_to, rute.price, transportation.description');
  $this->db->from('rute');
  $this->db->join('transportation', 'transportation.id = rute.transportid');
  return $this->db->get();
 }
 function tampil_data_bandara(){
  return $this->db->get('airport');
 }
 function input_data_bandara($data,$table){
  $this->db->insert($table,$data);
 }
 function tampil_rute($from,$to){
  $this->db->select("rute.id,rute.depart_at,rute.rute_from,rute.rute_to,rute.price,transportation.description");
  $this->db->from('rute');
  $this->db->join()('transportation','transportation.id = rute.transportid');
  $this->db->where('rute.rute_from', $from);
  $this->db->where('rute.rute_to',$to);
  $query = $this->db->get();
  return $query->result();

 }

}
?>
