<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="#">List Film</a>
    </li>
    <li class="breadcrumb-item active">Overview</li>
  </ol>



<div class="container">
	<table border='1' id="tabelToko" class="table table-striped table-bordered" cellspacing="0" width="100%"> 
		<thead>
			<tr>
			<th>NO</th>
            <th>judul film</th>
            
			</tr>
		</thead>
		<?php
		foreach ($data as $data) {
			?>
				<tr>
					<td><?= $data->id_film ?></td>
                    <td><?= $data->judul_film?></td>
                    
				</tr>
			<?php
		}
		?>
	</table>
</div>

