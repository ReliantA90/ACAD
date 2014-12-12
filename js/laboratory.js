$(document).ready(function(){
	$('#chemical_entry_form').hide();
	$('#labo_reg_ope_form').hide();
	$('#labo_reg_sess_form').hide();
	$('#ins_ety_form').hide();
	$('#prac_ety_form').hide();

	$('#phy_inst_entry').on('click',function(){
		$('#ins_ety_form').show();
		$('#chemical_entry_form').hide();
		$('#labo_reg_ope_form').hide();
		$('#labo_reg_sess_form').hide();
		$('#prac_ety_form').hide();
	});

	$('#phy_prac_entry').on('click',function(){
		$('#ins_ety_form').hide();
		$('#chemical_entry_form').hide();
		$('#labo_reg_ope_form').hide();
		$('#labo_reg_sess_form').hide();
		$('#prac_ety_form').show();
	});

	$('#phy_stu_reg_sess').on('click',function(){
		$('#ins_ety_form').hide();
		$('#chemical_entry_form').hide();
		$('#labo_reg_ope_form').hide();
		$('#labo_reg_sess_form').show();
		$('#prac_ety_form').hide();
	});

	$('#phy_stu_reg_prac').on('click',function(){
		$('#ins_ety_form').hide();
		$('#chemical_entry_form').hide();
		$('#labo_reg_ope_form').show();
		$('#labo_reg_sess_form').hide();
		$('#prac_ety_form').hide();
	});

	$('#che_che_entry').on('click',function(){
		$('#ins_ety_form').hide();
		$('#chemical_entry_form').show();
		$('#labo_reg_ope_form').hide();
		$('#labo_reg_sess_form').hide();
		$('#prac_ety_form').hide();
	});

	$('#che_inst_entry').on('click',function(){
		$('#ins_ety_form').show();
		$('#chemical_entry_form').hide();
		$('#labo_reg_ope_form').hide();
		$('#labo_reg_sess_form').hide();
		$('#prac_ety_form').hide();
	});

	$('#che_prac_entry').on('click',function(){
		$('#ins_ety_form').hide();
		$('#chemical_entry_form').hide();
		$('#labo_reg_ope_form').hide();
		$('#labo_reg_sess_form').hide();
		$('#prac_ety_form').show();

	});
	$('#che_stu_reg_sess').on('click',function(){
		$('#ins_ety_form').hide();
		$('#chemical_entry_form').hide();
		$('#labo_reg_ope_form').hide();
		$('#labo_reg_sess_form').show();
		$('#prac_ety_form').hide();
	});

	$('#che_stu_reg_prac').on('click',function(){
		$('#ins_ety_form').hide();
		$('#chemical_entry_form').hide();
		$('#labo_reg_ope_form').show();
		$('#labo_reg_sess_form').hide();
		$('#prac_ety_form').hide();
	});
});