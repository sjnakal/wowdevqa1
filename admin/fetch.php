<?php
//fetch.php
if(isset($_POST["action"]))
{
	$country_id=$_POST["query"];
  include "connect.php";
 $output = '';
 if($_POST["action"] == "country"){	
  $query = "SELECT provience.provience_id,provience.provience_name,country.country_name FROM country,provience WHERE country.country_id=provience.fk_country_id AND country.country_id=$country_id GROUP BY provience.provience_id";
   
  $result = mysqli_query($con, $query);
  $output .= '<option value="">Select Province</option>';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '<option value="'.$row[0].'">'.$row[1].'</option>';
  }
 }
 
  if($_POST["action"] == "state"){
  $query = "SELECT district.district_id,district.district_name FROM district, provience,country WHERE district.fk_peovince_id=provience.provience_id AND provience.fk_country_id=country.country_id AND provience.provience_id= '".$_POST["query"]."' GROUP BY district.district_id ";
  $result = mysqli_query($con, $query);
  $output .= '<option value="">Select District</option>';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '<option value="'.$row[0].'">'.$row[1].'</option>';
  }
 }
  if($_POST["action"] == "district"){
  $query = "SELECT municipality.mun_id,municipality.mun_name FROM municipality,district,provience,country WHERE municipality.fk_district_id = district.district_id AND district.fk_peovince_id = provience.provience_id AND provience.fk_country_id = country.country_id AND district.district_id= '".$_POST["query"]."'";
  $result = mysqli_query($con, $query);
  $output .= '<option value="">Select Local level</option>';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '<option value="'.$row[0].'">'.$row[1].'</option>';
  }
 }
 if($_POST["action"] == "mun"){
  $query = "SELECT add_ward.ward_id,add_ward.ward_number FROM add_ward,municipality,district,provience,country WHERE add_ward.fk_mun_id = municipality.mun_id AND municipality.fk_district_id = district.district_id AND district.fk_peovince_id = provience.provience_id AND provience.fk_country_id = country.country_id AND municipality.mun_id= '".$_POST["query"]."'";
    
  $result = mysqli_query($con, $query);
  $output .= '<option value="">Select ward</option>';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '<option value="'.$row[0].'">'.$row[1].'</option>';
  }
 }
 echo $output;
}
?>
