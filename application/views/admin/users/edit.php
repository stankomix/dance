<section class="content">
  <div class="row">

    <div class="col-md-12">
      <div class="form-group">
        <a href="/admin/users" class="btn btn-primary">Member listing</a>
        <a href="/admin/users/view/<?php echo $user['Teilnehmerid']; ?>" class="btn btn-primary">Member profile</a>
      </div>
    </div>

    <div class="col-md-6">

      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Edit member</h3>
        </div>

        <form action="/admin/users/edit/<?php echo $user['Teilnehmerid']; ?>" method="post" enctype="multipart/form-data" role="form">
          <div class="box-body">

            <?php if(validation_errors() != '') { ?>
              <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4>Error(s) occured:</h4>
                <?php echo validation_errors(); ?>
              </div>
            <?php } ?>

            <div class="form-group">
              <label for="user-note">First Name:</label>

			   <input type="text" class="form-control" name="vorname" value="<?php echo $user['Vorname']; ?>" required>	
            </div>

			<div class="form-group">
              <label for="user-note">Last Name :</label>
			  
			   <input type="text" class="form-control" name="nachname" value="<?php echo $user['Nachname']; ?>" required>
            </div>
			
			<div class="form-group">
              <label for="user-type">Person type:</label>
              <?php 
			  
				$type_person = array();
				foreach($user['person_type'] as $data){
					$type_person[$data['Persontypid']] = $data['Persontyp']; 
				}
				
			  
			  echo form_dropdown('personType',
                                        $type_person,
                                        $user['Persontyp'],array('id' => 'person-type', 'class' => 'form-control'));
			  ?>
            </div>

			 <div class="input-group col-xs-12">
			  <label>Language:</label>
			  <?php echo form_dropdown('language', $conf['languages'],$user['language'],array('id' => 'person-type', 'class' => 'form-control')); ?>
			</div>
			
            <div class="form-group">
              <label for="user-note">Mobiltelefon :</label>
			   <input type="text" class="form-control" name="mobiltelefon" value="<?php echo  $user['Mobiltelefon']; ?>" required>
            </div>
			
			<div class="form-group">
              <label for="user-note">Telefon :</label>
			   <input type="text" class="form-control" name="telefon" value="<?php echo  $user['Telefon']; ?>">
            </div>

			<div class="form-group">
              <label for="user-note">Email:</label>
			   <input type="email" class="form-control" name="email" value="<?php echo  $user['Email']; ?>" required>
            </div>
			
			<div class="form-group">
              <label for="user-note">Strasse:</label>
			   <input type="text" class="form-control" name="strasse" value="<?php echo  $user['Strasse']; ?>" required>
            </div>
			
			<div class="form-group">
              <label for="user-note">Ort:</label>
			   <input type="text" class="form-control" name="ort" value="<?php echo  $user['Ort']; ?>" required>
            </div>
			
			<div class="form-group">
              <label for="user-note">PLZ:</label>
			   <input type="number" class="form-control" name="plz" value="<?php echo  $user['PLZ']; ?>" required>
            </div>
			
			<div class="form-group">
              <label for="user-note">Geburtsdatum:</label>
			   <input type="text" class="form-control default-calendar" readonly name="geburtsdatum" value="<?php echo  date("d.m.Y",strtotime($user['Geburtsdatum'])); ?>">
            </div>
			
			<div class="form-group">
              <label for="user-note">Newsletter:</label>

			  <?php 	$option_news  = array('yes','no');
			  echo form_dropdown('Newsletter',
                                        $option_news,
                                        $user['Newsletter'],
                                        array('id' => 'user-type', 'class' => 'form-control'));
										?>
            </div>
			

            <div class="form-group">
              <label for="user-note">Bemerkung:</label>
              <textarea id="user-note" required class="form-control" name="Bemerkung"><?php echo $user['Bemerkung']; ?></textarea>
            </div>
			
			<div class="form-group">
              <label for="user-note">Eingetragen:</label>
			   <input required type="text" class="form-control default-calendar" readonly name="eingetragen" value="<?php echo   date("d.m.Y",strtotime($user['Eingetragen'])); ?>">
            </div>

            <div class="form-group">
              <label for="user-type">Member type:</label>
              <?php echo form_dropdown('usertype',
                                        $conf['usertypes'],
                                        $user['usertype'],
                                        array('id' => 'user-type', 'class' => 'form-control'));
              ?>
            </div>
			
			
			<div class="form-group">
              <label for="user-note">Reset Card:</label>
			   <input required type="button" id="resetUserCard" data-id="<?php echo $user['Teilnehmerid']; ?>"  class="btn btn-primary" name="eingetragen" value="Reset Card">
            </div>

          </div>

          <div class="box-footer">
            <button type="submit" class="btn btn-primary">Save</button>
          </div>
        </form>

      </div>

    </div>

  </div>
</section>