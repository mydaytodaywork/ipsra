
<table  width=100% style="font:Verdana, Arial, Helvetica, sans-serif;font-size:12px;padding-left:0px " >
<tr>
<td width="1%" background="<?php echo base_url();?>images/bg_left.gif">
</td>
<td width="4%" >
</td>
<td>
<br /><br />

	<?php 
if ( ! is_null($course_results))
{
	 if (count($course_results))
	 {
	 	$total_results=count($course_results) ?>
	 
			<h1><font color="#3D3D3D" <b> Bioinformatics Courses available at 	 	
			<!-- Name_of_Resource-->
			<?php 
			if($results[0]->Name_of_Resource)
			{ ?>
						
				<a style="color:#000000; text-decoration:none;" onmouseover="this.style.color='#FF0000'" onmouseout="this.style.color='#000000'"  href="<?php if($results[0]->url_of_resource) echo $results[0]->url_of_resource ?>"><?php echo highlight_phrase($results[0]->Name_of_Resource, $search_terms, '<span style="color:#F47200">', '</span>'); ?> </a>
				</b></font>
			<?php 
			} ?>
			
			<!-- full_name_of_resource-->
			<?php 
			if($results[0]->full_name_of_resource)
			{ ?>
						<br><b>Full Name of the Institute </b> : 
						<font color="#3D3D3D" style="font-weight:100" >
						<?php echo highlight_phrase($results[0]->full_name_of_resource, $search_terms, '<span style="color:#F47200">', '</span>'); ?> </font>
			<?php
			} ?>


		<ol style="list-style-type: decimal; font-size:14px; font-family:'Times New Roman', Times, serif; font-style:normal"><?php
	 	foreach($course_results as $result)
		{
			?>
			<li> 

			<?php if($result->course_name)
			{ ?>
						<!-- course_name  -->
						<p align='justify'><b>
			<?php if($result->course_url)
			{ ?>
						<!-- If course url the show link otherwise not course_name  -->
						<a style="color:#000000; text-decoration:none;font-size:14px; " onmouseover="this.style.color='#FF0000'" onmouseout="this.style.color='#000000'"  href="<?php if($result->course_url) echo $result->course_url ?>">						
			<?php
			} ?>
						
						Name of the Course : <?php echo $result->course_name."</a></b></font>"; 
			} ?>


			<!-- allow edit paper if admin login -->
<?php
			if($this->session->userdata('logged_as') == 'admin')
			{ ?>
				<b><a href="<?php echo site_url();?>pages/con_del_cou/<?php echo $result->master_list?>/<?php echo $result->s_no?>" target="_self">
				<font color="#FF00" >Remove Course No. <?php echo $result->s_no?></font></a> 

						<b><a href="<?php echo site_url();?>user/edit_course/<?php echo $result->s_no?>" >(Edit Course)</a></b>

						
			<?php
			} ?>
			
			<?php if($result->degree_type)
			{ ?>
						<!-- degree_type  -->
						<br><b>Type of Degree </b> : 
						<font color="#3D3D3D" style="font-weight:100" >
						<?php echo $result->degree_type."</font>"; 
			} ?>

			<?php if($result->department)
			{ ?>
						<!-- department  -->
						<br><b>Name of the Department </b> : 
						<font color="#3D3D3D" style="font-weight:100" >
						<?php echo $result->department."</font>"; 
			} ?>

			<?php if($result->university)
			{ ?>
						<!-- university  -->
						<br><b>University Affiliation </b> : 
						<font color="#3D3D3D" style="font-weight:100" >
						<?php echo $result->university."</font>"; 
			} ?>

			<?php if($result->available_since)
			{ ?>
						<!-- available_since  -->
						<br><b>Available Since</b> :  
						<font color="#3D3D3D" style="font-weight:100" >
						<?php echo $result->available_since."</font>"; 
			} ?>

			<?php if($result->course_duration)
			{ ?>
						<!-- course_duration  -->
						<br><b>Duration of Course</b> :  
						<font color="#3D3D3D" style="font-weight:100" >
						<?php echo $result->course_duration."</font>"; 
			} ?>


			<?php if($result->eligiibility)
			{ ?>
						<!-- eligiibility  -->
						<br><b>Admission Eligibility </b> :  
						<font color="#3D3D3D" style="font-weight:100" >
						<?php echo $result->eligiibility."</font>"; 
			} ?>

			<?php if($result->sujects)
			{ ?>
						<!-- sujects  -->
						<br><b>Suject Specialization</b> :  
						<font color="#3D3D3D" style="font-weight:100" >
						<?php echo $result->sujects."</font>"; 
			} ?>

			<?php if($result->degree_requirements)
			{ ?>
						<!-- degree_requirements  -->
						<br><b>Degree Requirements</b> :  
						<font color="#3D3D3D" style="font-weight:100" >
						<?php echo $result->degree_requirements."</font>"; 
			} ?>

			<?php if($result->distance_mode)
			{ ?>
						<!-- distance_mode  -->
						<br><b>Distance Mode</b> :  
						<font color="#3D3D3D" style="font-weight:100" >
						<?php echo $result->distance_mode."</font>"; 
			} ?>



			</p></li><br><br>
		<?php 
		}
		?> </ol>
		 <?php  ?><?php
	}
	else
	{
		?>  <br /><br /><br /><br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; NO Publication found.<?php  $flag=true;
		?>' &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <br /><br /><br />
		
	<?php
	}
}
?>
<br />
<br />

</td>
<td width="1%"> </td>
<td width="1%" background="<?php echo base_url();?>images/bg_right.gif"> </td>

</td>
</td>

</table>

<?php if($flag==true) {?>
<br /><br /> 
 &nbsp;   
<br />
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
<?php }?>
