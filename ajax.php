<?php 
$pdo = new PDO("mysql:host=localhost;dbname=demorsystem","root",'');
$query = "INSERT INTO `user_data` (`id`, `submit_at`, `DeltoidFL`, `DeltoidFR`, `SternocleidomastoidFL`, `SternocleidomastoidFR`, `TrapeziusFR`, `TrapeziusFL`, `PectoralisMajorFL`, `PectoralisMajorFR`, `RectusAbdominusF`, `RectusAbdominusFL3`, `RectusAbdominusFL2`, `RectusAbdominusFR3`, `RectusAbdominusFR2`, `RectusAbdominusFL1`, `RectusAbdominusFR1`, `SerratusAnteriorFL`, `ExternalObliqueFL`, `SerratusAnteriorFR`, `ExternalObliqueFR`, `BicepsFL`, `BicepsFR`, `FlexorCarpiRadialsFL`, `PalmarisLongusFL`, `BrachioradialisFL`, `FlexorCarpiRadialisFR`, `PalmarisLongusFR`, `BrachioradialisFR`, `FlexorDigitorumSuperficialsFL`, `FlexorDigitorumSuperficialisFR`, `LubricalFL`, `LubricalFR`, `PectineusFL`, `SartoriusFL`, `AdductorLongusFL`, `GluteusMediusFL`, `GracilisFL`, `VastusMedialisFL`, `RectusFemorisFL`, `TensorFaciaeLataeFL`, `VastusLaterailsFL`, `PectineusFR`, `SartoriusFR`, `AdductorLongusFR`, `TensorFaciaeLataeFR`, `GluteusMediusFR`, `GracilisFR`, `VastusMedialisFR`, `RectusFemorisFR`, `VastusLateralisFR`, `GatrocnemiusFL`, `SoleusFL`, `TibialisAnteriorFL`, `PeroneusLongusFL`, `GastrocnemiusFR`, `SoleusFR`, `TibialisAnteriorFR`, `PeroneusLongusFR`, `ExtensorHallucisBrevisFL`, `ExtensorDigitorumBrevisFL`, `ExtensorHallucisBrevisFR`, `ExtensorDigitorumBrevisFR`, `RhomboidBL`, `RhomboidBR`, `ExtensorCarpiRadialisBR`, `ExtensorDigitorumBR`, `ExtensorCarpiUlnarisBR`, `ExtensorDigitiMinimiBR`, `ExtensorCarpiRadialisBL`, `ExtensorDigitorumBL`, `ExtensorCarpiUlnarisBL`, `ExtensorDigitiMinimiBL`, `TrapeziusBR`, `TrapeziusBL`, `TeresMajorBR`, `TeresMajorBL`, `DeltoidBR`, `DeltoidBL`, `TricepsBR`, `TricepsBL`, `LatissimusDorsiBR`, `LatissimusDorsiBL`, `ThoracoLumbarFasciaBL`, `ThoracoLumbarFasciaBR`, `GluteusMaximusBL`, `GluteusMaximusBR`, `VastusLateralisBR`, `VastusLateralisBL`, `GracilisBR`, `GracilisBL`, `BicepsFemorisBR`, `BicepsFemorisBL`, `SemimembranosusBR`, `SemimembranosusBL`, `SemitendinosisBR`, `SemitendinosisBL`, `GastrocnemiusBR`, `GastrocnemiusBL`, `SoleusBR`, `SoleusBL`, `first_name`, `last_name`, `dob`, `phone`, `street_address`, `zip_code`, `email`, `contact_name`, `contact_phone`, `relationship_to_you`, `physician_name`, `physician_phone`, `physician_address`, `last_physical`, `hdl`, `ldl`, `triglycerides`, `blood_preasure`, `ques1ans`, `ques2ans`, `ques3ans`, `ques4ans`, `ques5ans`, `ques6ans`, `ques7ans`, `ques8ans`, `ques9ans`, `ques10ans`, `ques11ans`, `ques12ans`, `ques13ans`, `ques14ans`, `authorizationSignature`, `goals`, `other_info`) VALUES (NULL, current_timestamp(), ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";


$result = $pdo->prepare($query);
$result->execute([$_POST['"DeltoidFL'],$_POST['DeltoidFR'],$_POST['SternocleidomastoidFL'],$_POST['SternocleidomastoidFR'],$_POST['TrapeziusFR'],$_POST['TrapeziusFL'],$_POST['PectoralisMajorFL'],$_POST['PectoralisMajorFR'],$_POST['RectusAbdominusF'],$_POST['RectusAbdominusFL3'],$_POST['RectusAbdominusFL2'],$_POST['RectusAbdominusFR3'],$_POST['RectusAbdominusFR2'],$_POST['RectusAbdominusFL1'],$_POST['RectusAbdominusFR1'],$_POST['SerratusAnteriorFL'],$_POST['ExternalObliqueFL'],$_POST['SerratusAnteriorFR'],$_POST['ExternalObliqueFR'],$_POST['BicepsFL'],$_POST['BicepsFR'],$_POST['FlexorCarpiRadialsFL'],$_POST['PalmarisLongusFL'],$_POST['BrachioradialisFL'],$_POST['FlexorCarpiRadialisFR'],$_POST['PalmarisLongusFR'],$_POST['BrachioradialisFR'],$_POST['FlexorDigitorumSuperficialsFL'],$_POST['FlexorDigitorumSuperficialisFR'],$_POST['LubricalFL'],$_POST['LubricalFR'],$_POST['PectineusFL'],$_POST['SartoriusFL'],$_POST['AdductorLongusFL'],$_POST['GluteusMediusFL'],$_POST['GracilisFL'],$_POST['VastusMedialisFL'],$_POST['RectusFemorisFL'],$_POST['TensorFaciaeLataeFL'],$_POST['VastusLaterailsFL'],$_POST['PectineusFR'],$_POST['SartoriusFR'],$_POST['AdductorLongusFR'],$_POST['TensorFaciaeLataeFR'],$_POST['GluteusMediusFR'],$_POST['GracilisFR'],$_POST['VastusMedialisFR'],$_POST['RectusFemorisFR'],$_POST['VastusLateralisFR'],$_POST['GatrocnemiusFL'],$_POST['SoleusFL'],$_POST['TibialisAnteriorFL'],$_POST['PeroneusLongusFL'],$_POST['GastrocnemiusFR'],$_POST['SoleusFR'],$_POST['TibialisAnteriorFR'],$_POST['PeroneusLongusFR'],$_POST['ExtensorHallucisBrevisFL'],$_POST['ExtensorDigitorumBrevisFL'],$_POST['ExtensorHallucisBrevisFR'],$_POST['ExtensorDigitorumBrevisFR'],$_POST['RhomboidBL'],$_POST['RhomboidBR'],$_POST['ExtensorCarpiRadialisBR'],$_POST['ExtensorDigitorumBR'],$_POST['ExtensorCarpiUlnarisBR'],$_POST['ExtensorDigitiMinimiBR'],$_POST['ExtensorCarpiRadialisBL'],$_POST['ExtensorDigitorumBL'],$_POST['ExtensorCarpiUlnarisBL'],$_POST['ExtensorDigitiMinimiBL'],$_POST['TrapeziusBR'],$_POST['TrapeziusBL'],$_POST['TeresMajorBR'],$_POST['TeresMajorBL'],$_POST['DeltoidBR'],$_POST['DeltoidBL'],$_POST['TricepsBR'],$_POST['TricepsBL'],$_POST['LatissimusDorsiBR'],$_POST['LatissimusDorsiBL'],$_POST['ThoracoLumbarFasciaBL'],$_POST['ThoracoLumbarFasciaBR'],$_POST['GluteusMaximusBL'],$_POST['GluteusMaximusBR'],$_POST['VastusLateralisBR'],$_POST['VastusLateralisBL'],$_POST['GracilisBR'],$_POST['GracilisBL'],$_POST['BicepsFemorisBR'],$_POST['BicepsFemorisBL'],$_POST['SemimembranosusBR'],$_POST['SemimembranosusBL'],$_POST['SemitendinosisBR'],$_POST['SemitendinosisBL'],$_POST['GastrocnemiusBR'],$_POST['GastrocnemiusBL'],$_POST['SoleusBR'],$_POST['SoleusBL'],$_POST['first_name'],$_POST['last_name'],$_POST['dob'],$_POST['phone'],$_POST['street_address'],$_POST['zip_code'],$_POST['email'],$_POST['contact_name'],$_POST['contact_phone'],$_POST['relationship_to_you'],$_POST['physician_name'],$_POST['physician_phone'],$_POST['physician_address'],$_POST['last_physical'],$_POST['hdl'],$_POST['ldl'],$_POST['triglycerides'],$_POST['blood_preasure'],$_POST['ques1ans'],$_POST['ques2ans'],$_POST['ques3ans'],$_POST['ques4ans'],$_POST['ques5ans'],$_POST['ques6ans'],$_POST['ques7ans'],$_POST['ques8ans'],$_POST['ques9ans'],$_POST['ques10ans'],$_POST['ques11ans'],$_POST['ques12ans'],$_POST['ques13ans'],$_POST['ques14ans'],$_POST['authorizationSignature'],$_POST['goals'],substr($_POST['other_info'], 0, -1)]);
//if($result->rowCount()){
    echo $result->rowCount();
//}


//substr($_POST['other_info'], 0, -1)
//$params ="";
//foreach($_POST as $key=>$value){
//    $params .='$_POST[\'' .$key . '\'],';
//}
//echo $params;

?>