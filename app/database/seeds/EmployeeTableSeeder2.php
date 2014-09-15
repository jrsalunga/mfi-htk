<?php

class EmployeeTableSeeder2 extends Seeder {

	public function run()
	{
		DB::table('employee')->insert(array(
			array('code'=>'0012', 'lastname'=>'Apoloy', 'firstname'=>'Edwin', 'middlename'=>'C', 'position'=>'Leadman', 'paytype'=>1, 'processing'=>1, 'rfid'=>'0002353874', 'id'=>'FA4EA23DA5C211E385D3C0188508F93C'),
			array('code'=>'0008', 'lastname'=>'Belando Jr', 'firstname'=>'Jose', 'middlename'=>'B', 'position'=>'Quantity Surveyor', 'paytype'=>1, 'processing'=>1, 'rfid'=>'0002016203', 'id'=>'33E9884FB0D811E3A0ECC0188508F93C'),
			array('code'=>'0020', 'lastname'=>'Cabada', 'firstname'=>'May Anne', 'middlename'=>'R', 'position'=>'Production Staff', 'paytype'=>1, 'processing'=>1, 'rfid'=>'0002012861', 'id'=>'1807056DB0D811E3A0ECC0188508F93C'),
			array('code'=>'0013', 'lastname'=>'Cariaga', 'firstname'=>'Stevie Rogienson', 'middlename'=>'D', 'position'=>'Aluminum Fabricator', 'paytype'=>1, 'processing'=>1, 'rfid'=>'0002333804', 'id'=>'19A04526A5C311E385D3C0188508F93C'),
			array('code'=>'0015', 'lastname'=>'Debalucos', 'firstname'=>'Arnold', 'middlename'=>'C', 'position'=>'Panel Saw Operator', 'paytype'=>1, 'processing'=>1, 'rfid'=>'0002347877', 'id'=>'D02DFC8CA5C111E385D3C0188508F93C'),
			array('code'=>'0035', 'lastname'=>'Diaz', 'firstname'=>'Johnatan', 'middlename'=>'I', 'position'=>'Asst Material Controller', 'paytype'=>1, 'processing'=>1, 'rfid'=>'0002349609', 'id'=>'B2A25569A5C111E385D3C0188508F93C'),
			array('code'=>'0009', 'lastname'=>'Escat', 'firstname'=>'Mely', 'middlename'=>'G', 'position'=>'Expiditer / Dispatcher', 'paytype'=>1, 'processing'=>1, 'rfid'=>'0002336244', 'id'=>'E4D8125BA5C211E385D3C0188508F93C'),
			array('code'=>'0050', 'lastname'=>'Flores', 'firstname'=>'Ailyn', 'middlename'=>'P', 'position'=>'Inventory Controller', 'paytype'=>1, 'processing'=>1, 'rfid'=>'0002009221', 'id'=>'2F83C260A5BF11E385D3C0188508F93C'),
			array('code'=>'0016', 'lastname'=>'Galasao', 'firstname'=>'Ryan', 'middlename'=>'O', 'position'=>'Homag Operator', 'paytype'=>1, 'processing'=>1, 'rfid'=>'0002357039', 'id'=>'8C774A47A5C111E385D3C0188508F93C'),
			array('code'=>'0099', 'lastname'=>'Garcia', 'firstname'=>'Armando', 'middlename'=>'-', 'position'=>'Production Manager', 'paytype'=>1, 'processing'=>1, 'rfid'=>'1234567890', 'id'=>'67A30428FE6911E3BA4174D02BCA8A4B'),
			//array('code'=>'0034', 'lastname'=>'Lino', 'firstname'=>'Edward', 'middlename'=>'D', 'position'=>'Installer', 'paytype'=>1, 'processing'=>1, 'rfid'=>'0002003777', 'id'=>'0E7A6066B0D711E3A0ECC0188508F93C'),
			array('code'=>'0029', 'lastname'=>'Lopez', 'firstname'=>'Roger', 'middlename'=>'T', 'position'=>'Plant Manager', 'paytype'=>1, 'processing'=>1, 'rfid'=>'0002356896', 'id'=>'99265B80A5C211E385D3C0188508F93C'),
			array('code'=>'0025', 'lastname'=>'Lumiguid', 'firstname'=>'Sonny', 'middlename'=>'L', 'position'=>'Postforming Operator', 'paytype'=>1, 'processing'=>1, 'rfid'=>'0002357245', 'id'=>'513FE18CA5C211E385D3C0188508F93C'),
			array('code'=>'0018', 'lastname'=>'Malicdem', 'firstname'=>'Edian', 'middlename'=>'O', 'position'=>'Multiple Boring Operator', 'paytype'=>1, 'processing'=>1, 'rfid'=>'0002351242', 'id'=>'27C819F9A5C211E385D3C0188508F93C'),
			array('code'=>'0019', 'lastname'=>'Mercado', 'firstname'=>'Dennis', 'middlename'=>'A', 'position'=>'Driver', 'paytype'=>1, 'processing'=>1, 'rfid'=>'0002329961', 'id'=>'6A1EC3BBA5C211E385D3C0188508F93C'),
			array('code'=>'0037', 'lastname'=>'Pat-Angay', 'firstname'=>'Jojie', 'middlename'=>'B', 'position'=>'Installer', 'paytype'=>1, 'processing'=>1, 'rfid'=>'0002009260', 'id'=>'BD589EF4B0D411E3A0ECC0188508F93C'),
			array('code'=>'0038', 'lastname'=>'Pepe', 'firstname'=>'Raymund Bruce', 'middlename'=>'P', 'position'=>'Installer', 'paytype'=>1, 'processing'=>1, 'rfid'=>'0002015228', 'id'=>'F8B3A82CB0D611E3A0ECC0188508F93C'),
			array('code'=>'0036', 'lastname'=>'Sembrano', 'firstname'=>'Randy', 'middlename'=>'C', 'position'=>'Panel Saw Operator', 'paytype'=>1, 'processing'=>1, 'rfid'=>'0002339376', 'id'=>'CBBE8D92A5C211E385D3C0188508F93C'),
			array('code'=>'0004', 'lastname'=>'Tan', 'firstname'=>'Steve', 'middlename'=>'C', 'position'=>'Maintainance Supervisor', 'paytype'=>1, 'processing'=>1, 'rfid'=>'0002009581', 'id'=>'34E91606A5C311E385D3C0188508F93C'),
			array('code'=>'0081', 'lastname'=>'Antonio', 'firstname'=>'Alvin', 'middlename'=>'X', 'position'=>'Helper', 'paytype'=>2, 'processing'=>1, 'rfid'=>'0004124355', 'id'=>'894FA470CA8911E385D7C0188508F93C'),
			array('code'=>'0084', 'lastname'=>'Apoloy', 'firstname'=>'Elmer', 'middlename'=>'X', 'position'=>'Helper', 'paytype'=>2, 'processing'=>1, 'rfid'=>'0004124853', 'id'=>'FC8482B1CA8811E385D7C0188508F93C'),
			array('code'=>'9002', 'lastname'=>'Base', 'firstname'=>'Rheliner', 'middlename'=>'E', 'position'=>'Helper', 'paytype'=>2, 'processing'=>1, 'rfid'=>'0004127577', 'id'=>'F92A4579F13E11E3874A74D02BCA8A4B'),
			array('code'=>'0086', 'lastname'=>'Bergrado', 'firstname'=>'Jayson', 'middlename'=>'X', 'position'=>'Helper', 'paytype'=>2, 'processing'=>1, 'rfid'=>'0004135810', 'id'=>'AED6A9EFCA8811E385D7C0188508F93C'),
			array('code'=>'0093', 'lastname'=>'Cabangunay', 'firstname'=>'Melvin', 'middlename'=>'X', 'position'=>'Helper', 'paytype'=>2, 'processing'=>1, 'rfid'=>'0004133454', 'id'=>'C33EB13BCA8511E385D7C0188508F93C'),
			array('code'=>'0085', 'lastname'=>'Dalida', 'firstname'=>'Gonzalo', 'middlename'=>'X', 'position'=>'Helper', 'paytype'=>2, 'processing'=>1, 'rfid'=>'0004141392', 'id'=>'E6AAB6D9CA8811E385D7C0188508F93C'),
			array('code'=>'0096', 'lastname'=>'Dalida', 'firstname'=>'Rogelio', 'middlename'=>'X', 'position'=>'Helper', 'paytype'=>2, 'processing'=>1, 'rfid'=>'0004124467', 'id'=>'4FFF594ACA8611E385D7C0188508F93C'),
			array('code'=>'0095', 'lastname'=>'Dela Cruz', 'firstname'=>'Ogie', 'middlename'=>'X', 'position'=>'Helper', 'paytype'=>2, 'processing'=>1, 'rfid'=>'0004135998', 'id'=>'F5E4F7F4CA8511E385D7C0188508F93C'),
			array('code'=>'0090', 'lastname'=>'Espiritu', 'firstname'=>'Joseph', 'middlename'=>'X', 'position'=>'Helper', 'paytype'=>2, 'processing'=>1, 'rfid'=>'0004128415', 'id'=>'C1422205CA8611E385D7C0188508F93C'),
			array('code'=>'9003', 'lastname'=>'Franciso', 'firstname'=>'Jerome', 'middlename'=>'M', 'position'=>'Helper', 'paytype'=>2, 'processing'=>1, 'rfid'=>'0004131115', 'id'=>'0138B2ABF13F11E3874A74D02BCA8A4B'),
			array('code'=>'0098', 'lastname'=>'Galasao', 'firstname'=>'Sonny', 'middlename'=>'X', 'position'=>'Helper', 'paytype'=>2, 'processing'=>1, 'rfid'=>'0004131443', 'id'=>'8FC3F6E5CA8611E385D7C0188508F93C'),
			array('code'=>'9005', 'lastname'=>'Gapusan', 'firstname'=>'Norman Jake', 'middlename'=>'A', 'position'=>'Helper', 'paytype'=>2, 'processing'=>1, 'rfid'=>'0004135775', 'id'=>'0D2E0802F13F11E3874A74D02BCA8A4B'),
			array('code'=>'9004', 'lastname'=>'Gatbunton', 'firstname'=>'Justin Ivan', 'middlename'=>'', 'position'=>'Helper', 'paytype'=>2, 'processing'=>1, 'rfid'=>'0004150033', 'id'=>'071D741AF13F11E3874A74D02BCA8A4B'),
			array('code'=>'9001', 'lastname'=>'Gemzon', 'firstname'=>'Larry', 'middlename'=>'F', 'position'=>'Helper', 'paytype'=>2, 'processing'=>1, 'rfid'=>'0004268271', 'id'=>'08C31096F6A111E3910174D02BCA8A4B'),
			array('code'=>'0094', 'lastname'=>'Gil', 'firstname'=>'Nazareno', 'middlename'=>'X', 'position'=>'Helper', 'paytype'=>2, 'processing'=>1, 'rfid'=>'0004138610', 'id'=>'DA87FFD1CA8511E385D7C0188508F93C'),
			array('code'=>'0082', 'lastname'=>'Malicdem Jr', 'firstname'=>'Angel', 'middlename'=>'X', 'position'=>'Helper', 'paytype'=>2, 'processing'=>1, 'rfid'=>'0004146546', 'id'=>'2EA37269CA8911E385D7C0188508F93C'),
			array('code'=>'0088', 'lastname'=>'Mercado', 'firstname'=>'John Edward', 'middlename'=>'X', 'position'=>'Helper', 'paytype'=>2, 'processing'=>1, 'rfid'=>'0004140049', 'id'=>'7F6F955ECA8811E385D7C0188508F93C'),
			array('code'=>'0083', 'lastname'=>'Nacasabug', 'firstname'=>'Efren', 'middlename'=>'X', 'position'=>'Helper', 'paytype'=>2, 'processing'=>1, 'rfid'=>'0004146554', 'id'=>'11C4BEE5CA8911E385D7C0188508F93C'),
			array('code'=>'0092', 'lastname'=>'Sonza', 'firstname'=>'Lester', 'middlename'=>'X', 'position'=>'Helper', 'paytype'=>2, 'processing'=>1, 'rfid'=>'0004149145', 'id'=>'490B9C95CA8511E385D7C0188508F93C'),
			array('code'=>'0087', 'lastname'=>'Torres', 'firstname'=>'Jeomar', 'middlename'=>'X', 'position'=>'Helper', 'paytype'=>2, 'processing'=>1, 'rfid'=>'0004150668', 'id'=>'940BEDA3CA8711E385D7C0188508F93C'),
			));
	}
}
