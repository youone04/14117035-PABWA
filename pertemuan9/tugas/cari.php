
        <?php 
        function query(){
		$conn = mysqli_connect("localhost","root","","mahasiswa");
		$querys="select * from mahasiswa";
		$result=mysqli_query($conn,$querys);
		$rows=[];
		while($row=mysqli_fetch_assoc($result)){
			$rows[]=$row;
		}

		return $rows;
	}

	function cari ($keyword){

		$query = "SELECT * FROM mahasiswa

				WHERE 

				 nama LIKE '%$keyword%'

				";

			return query($query);

	}


	

         ?>