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
 function tampil_rute($from,$to,$date){
  $this->db->select("*");
  $this->db->from('rute,transportation');
  $this->db->where('rute.transportid = transportation.id');
  $this->db->where('rute.rute_from', $from);
  $this->db->where('rute.rute_to',$to);
  $this->db->where('rute.date',$date);

  return $this->db->get();

 }

 function from(){
  $this->db->select('distinct(rute_from)');
  return $this->db->get('rute');
 }
 function to(){
  $this->db->select('distinct(rute_to)');
  return $this->db->get('rute');
 }
 function join_clientreserve($where){
      $this->db->select("rute.ruteid,rute.date,rute.depart_at,rute.rute_from,rute.rute_to,rute.price,transportation.description,transportation.code");
        $this->db->from('rute');
        $this->db->join('transportation', 'transportation.id = rute.transportid');
        $this->db->where('rute.ruteid', $where);
        $query = $this->db->get();
        return $query->result();


}
function seat($id){
  $this->db->select('transportation.seat_qty');
  $this->db->from('rute,transportation');
  $this->db->where('rute.transportid = transportation.id');
  $this->db->where('rute.ruteid', $id);
  return $this->db->get();
}
function filterseat($id){
  $this->db->select('seat');
  $this->db->where('reservation.ruteid',$id);
  $this->db->where('reservation.kd_resv = customer.kd_resv');
  return $this->db->get('customer,reservation');
}
}