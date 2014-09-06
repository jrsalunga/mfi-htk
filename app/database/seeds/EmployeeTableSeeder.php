<?php

class EmployeeTableSeeder extends Seeder {

	public function run()
	{
		DB::table('employee')->insert(array(
			array('code'=>'08-0476', 'lastname'=>'Salunga', 'firstname'=>'Jefferson', 'middlename'=>'Raga',	'position'=>'IT Staff', 'paytype'=>1, 'processing'=>0, 'rfid'=>'0008271985', 'id'=>'10A782CFECEA11E28649235D6C08DF49'),
			array('code'=>'0061', 'lastname'=>'Aboda', 'firstname'=>'Neil', 'middlename'=>'Ragas', 'position'=>'Janitor', 'paytype'=>1, 'processing'=>1, 'rfid'=>'0004129173', 'id'=>'9E779290D75911E39C2F60A44CA73CF5'),
			array('code'=>'0043', 'lastname'=>'Araullo', 'firstname'=>'Joselito', 'middlename'=>'R', 'position'=>'Project Coordinator', 'paytype'=>1, 'processing'=>1, 'rfid'=>'0042015069', 'id'=>'B2AD1BA6B0D711E3A0ECC0188508F93C'),
			array('code'=>'0052', 'lastname'=>'Brequillo', 'firstname'=>'Benjie', 'middlename'=>'A', 'position'=>'CAD Operator', 'paytype'=>1, 'processing'=>1, 'rfid'=>'0042012162', 'id'=>'65CBC7C0B0D711E3A0ECC0188508F93C'),
			array('code'=>'0022', 'lastname'=>'Cabada', 'firstname'=>'Jonelle', 'middlename'=>'R', 'position'=>'Marketing Assistant', 'paytype'=>1, 'processing'=>1, 'rfid'=>'0042018297', 'id'=>'0102E18BB0D811E3A0ECC0188508F93C'),
			array('code'=>'ecapulla', 'lastname'=>'Capulla', 'firstname'=>'Ericson', 'middlename'=>'Arcilla', 'position'=>'Sales and Design Consultant', 'paytype'=>1, 'processing'=>1, 'rfid'=>'0010291966', 'id'=>'4B7F75BE211E11E4873A60A44CA73CF5'),
			array('code'=>'0054', 'lastname'=>'Carlos', 'firstname'=>'Janet', 'middlename'=>'M', 'position'=>'Project coordinator', 'paytype'=>1, 'processing'=>0, 'rfid'=>'0044269243', 'id'=>'F4C649CEEB9011E3894560A44CA73CF5'),
			array('code'=>'mdacasin', 'lastname'=>'Dacasin', 'firstname'=>'Mark Joseph', 'middlename'=>'A', 'position'=>'Sales and Design Consultant', 'paytype'=>1, 'processing'=>1, 'rfid'=>'0011171986', 'id'=>'6754864B211E11E4873A60A44CA73CF5'),
			array('code'=>'0042', 'lastname'=>'Dela Cruz', 'firstname'=>'Nelsy', 'middlename'=>'C', 'position'=>'Project Coordinator', 'paytype'=>1, 'processing'=>0, 'rfid'=>'0002020015', 'id'=>'956E6377B0D611E3A0ECC0188508F93C'),
			array('code'=>'0062', 'lastname'=>'Delos Santos', 'firstname'=>'Jennifer Ann', 'middlename'=>'Cabalejo', 'position'=>'HR/Admin Assistant', 'paytype'=>1, 'processing'=>1, 'rfid'=>'0001993541', 'id'=>'5A3810CFD75211E39C2F60A44CA73CF5'),
			array('code'=>'rfrondo', 'lastname'=>'Frondozo', 'firstname'=>'Renato', 'middlename'=>'Aga', 'position'=>'Security Guard', 'paytype'=>1, 'processing'=>1, 'rfid'=>'0004281966', 'id'=>'20FFDACE31B811E4873A60A44CA73CF5'),
			array('code'=>'0045', 'lastname'=>'Galang', 'firstname'=>'Rene', 'middlename'=>'S', 'position'=>'Installer', 'paytype'=>1, 'processing'=>1, 'rfid'=>'0001997483', 'id'=>'3C0E9E9DB0D711E3A0ECC0188508F93C'),
			array('code'=>'0005', 'lastname'=>'Gomez', 'firstname'=>'Enrico', 'middlename'=>'B', 'position'=>'Design Consultant', 'paytype'=>1, 'processing'=>1, 'rfid'=>'0002011548', 'id'=>'A21BD4C5B0D511E3A0ECC0188508F93C'),
			array('code'=>'0057', 'lastname'=>'Javarro', 'firstname'=>'Bovie', 'middlename'=>'P', 'position'=>'Project Coordinator', 'paytype'=>1, 'processing'=>0, 'rfid'=>'0002002364', 'id'=>'B98BF826B0D511E3A0ECC0188508F93C'),
			array('code'=>'0049', 'lastname'=>'Latip', 'firstname'=>'Samad', 'middlename'=>'S', 'position'=>'Project Coordinator', 'paytype'=>1, 'processing'=>0, 'rfid'=>'0004147538', 'id'=>'F2DB953BCA8411E385D7C0188508F93C'),
			array('code'=>'0034', 'lastname'=>'Lino', 'firstname'=>'Edward', 'middlename'=>'D', 'position'=>'Installer', 'paytype'=>1, 'processing'=>0, 'rfid'=>'0002003777', 'id'=>'0E7A6066B0D711E3A0ECC0188508F93C'),
			array('code'=>'0047', 'lastname'=>'Loyola', 'firstname'=>'Celino', 'middlename'=>'R', 'position'=>'Quality Controller', 'paytype'=>1, 'processing'=>0, 'rfid'=>'0002011424', 'id'=>'898B648CB0D711E3A0ECC0188508F93C'),
			array('code'=>'0014', 'lastname'=>'Lu', 'firstname'=>'Susan', 'middlename'=>'C', 'position'=>'Accounting', 'paytype'=>1, 'processing'=>1, 'rfid'=>'0002348861', 'id'=>'21EE0211B0D511E3A0ECC0188508F93C'),
			array('code'=>'0055', 'lastname'=>'Manila', 'firstname'=>'Denmar', 'middlename'=>'B', 'position'=>'Installer', 'paytype'=>1, 'processing'=>0, 'rfid'=>'0002001757', 'id'=>'D9E75C1CB0D411E3A0ECC0188508F93C'),
			array('code'=>'0010', 'lastname'=>'Noriega', 'firstname'=>'Rosita', 'middlename'=>'R', 'position'=>'Purchaser', 'paytype'=>1, 'processing'=>1, 'rfid'=>'0002349903', 'id'=>'0B0C485AB0D511E3A0ECC0188508F93C'),
			array('code'=>'0056', 'lastname'=>'Olivar Jr', 'firstname'=>'Alfredo', 'middlename'=>'X', 'position'=>'Design Consultant', 'paytype'=>1, 'processing'=>1, 'rfid'=>'0002002621', 'id'=>'B0C580CCB0D611E3A0ECC0188508F93C'),
			array('code'=>'0038', 'lastname'=>'Pepe', 'firstname'=>'Raymund Bruce', 'middlename'=>'P', 'position'=>'Installer', 'paytype'=>1, 'processing'=>0, 'rfid'=>'0002015228', 'id'=>'F8B3A82CB0D611E3A0ECC0188508F93C'),
			array('code'=>'0033', 'lastname'=>'Pinoy Jr', 'firstname'=>'Juanito', 'middlename'=>'M', 'position'=>'Project Coordinator', 'paytype'=>1, 'processing'=>0, 'rfid'=>'0002008821', 'id'=>'D00C1D3EB0D711E3A0ECC0188508F93C'),
			array('code'=>'0002', 'lastname'=>'Quiachon', 'firstname'=>'Marites', 'middlename'=>'C', 'position'=>'Executive Assistant', 'paytype'=>1, 'processing'=>1, 'rfid'=>'0009688332', 'id'=>'D98FE5A6B0D511E3A0ECC0188508F93C'),
			array('code'=>'xxx2', 'lastname'=>'Rivera', 'firstname'=>'Jordie', 'middlename'=>'S', 'position'=>'HR Officer', 'paytype'=>1, 'processing'=>1, 'rfid'=>'0004021977', 'id'=>'3EECBAF0D75A11E39C2F60A44CA73CF5'),
			array('code'=>'0058', 'lastname'=>'Sanchez', 'firstname'=>'Elisa', 'middlename'=>'Arellano', 'position'=>'Cad Designer', 'paytype'=>1, 'processing'=>1, 'rfid'=>'0004271760', 'id'=>'995A7F76D75A11E39C2F60A44CA73CF5'),
			array('code'=>'0053', 'lastname'=>'Se', 'firstname'=>'Rachelle Ann', 'middlename'=>'Dela Cruz', 'position'=>'Marketing Assistant', 'paytype'=>1, 'processing'=>1, 'rfid'=>'0010121989', 'id'=>'E0DEC2A1D75911E39C2F60A44CA73CF5'),
			array('code'=>'xxxxxxx', 'lastname'=>'Simbulan', 'firstname'=>'Ravian', 'middlename'=>'Francisco', 'position'=>'Driver', 'paytype'=>1, 'processing'=>1, 'rfid'=>'0009291990', 'id'=>'4685B99ADCA611E3AEB860A44CA73CF5'),
			array('code'=>'0046', 'lastname'=>'Tanio', 'firstname'=>'Melchor', 'middlename'=>'A', 'position'=>'Installer', 'paytype'=>1, 'processing'=>0, 'rfid'=>'0004290680', 'id'=>'77D95D63EB9011E3894560A44CA73CF5'),
			array('code'=>'0011', 'lastname'=>'Velez', 'firstname'=>'Monica', 'middlename'=>'P', 'position'=>'Design Consultant', 'paytype'=>1, 'processing'=>1, 'rfid'=>'0002338605', 'id'=>'0713F534B0D611E3A0ECC0188508F93C'),
			array('code'=>'0059', 'lastname'=>'Ynion', 'firstname'=>'Garry', 'middlename'=>'.', 'position'=>'Project coordinator', 'paytype'=>1, 'processing'=>0, 'rfid'=>'0004273936', 'id'=>'B4AFD7E8EB9011E3894560A44CA73CF5')
		));
	}
}
