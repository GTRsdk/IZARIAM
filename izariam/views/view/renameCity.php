<div id="mainview">
    <h1 style="text-align:center">Town hall</h1>

	<?php
	$this->load->helper('form');
	echo form_open('actions/rename');
	?>
	<div id="renameCity" class="contentBox01h">
			<h3 class="header">Rename the town</h3>
            <div class="content">
				<div class="oldCityName"><span class="textLabel">Old name: </span><?=$this->Player_Model->now_town->name?></div>
                <div class="newCityName"><label for="newCityName">New name: </label>
				<?php $data = array(
							  'name'        => 'name',
							  'id'          => 'newCityName',
							  'maxlength'   => '15',
							  'size'        => '30',
							);
				echo form_input($data);
				
				$data = array(
						'class'        => 'button',
						'value'        => 'Change name',
					);
				echo form_submit($data); ?>
                </div>
            </div>
            <div class="footer"></div>
        </div>
	</form>
</div>