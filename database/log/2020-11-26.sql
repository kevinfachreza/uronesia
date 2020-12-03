ALTER TABLE `kasus_operative_pre`   
	ADD COLUMN `comorbid_ckd` VARCHAR(6) NULL AFTER `comorbid_tb`,
	ADD COLUMN `comorbid_premature` VARCHAR(6) NULL AFTER `comorbid_ckd`,
	ADD COLUMN `comorbid_hypospadia` VARCHAR(6) NULL AFTER `comorbid_premature`,
	ADD COLUMN `comorbid_ambigous_gentialia` VARCHAR(6) NULL AFTER `comorbid_hypospadia`,
	ADD COLUMN `comorbid_anorectal_malformation` VARCHAR(6) NULL AFTER `comorbid_ambigous_gentialia`,
	ADD COLUMN `comorbid_down_syndrome` VARCHAR(6) NULL AFTER `comorbid_anorectal_malformation`,
	ADD COLUMN `comorbid_omphalocele` VARCHAR(6) NULL AFTER `comorbid_down_syndrome`,
	ADD COLUMN `comorbid_gastrosciziz` VARCHAR(6) NULL AFTER `comorbid_omphalocele`;

ALTER TABLE `kasus_physical_examination`   
	ADD COLUMN `testes_right_palpable_size` TEXT NULL AFTER `testes_hydrocele`,
	ADD COLUMN `testes_right_palpable_pos` TEXT NULL AFTER `testes_right_palpable_size`,
	ADD COLUMN `testes_right_palpable_non` TEXT NULL AFTER `testes_right_palpable_pos`,
	ADD COLUMN `testes_left_palpable_non` TEXT NULL AFTER `testes_right_palpable_non`,		/* Duplicate column name */
	ADD COLUMN `testes_left_palpable_pos` TEXT NULL AFTER `testes_left_palpable_non`,
	ADD COLUMN `testes_left_palpable_size` TEXT NULL AFTER `testes_left_palpable_pos`,		/* Duplicate column name */
	ADD COLUMN `classic_extrophy_male` TEXT NULL AFTER `haemorrhoid`,
	ADD COLUMN `classic_extrophy_female` TEXT NULL AFTER `classic_extrophy_male`,
	ADD COLUMN `epispadia` VARCHAR(6) NULL AFTER `classic_extrophy_female`,
	ADD COLUMN `child_hydro_other_complain` TEXT NULL AFTER `epispadia`,
	ADD COLUMN `child_hydro_gender` TEXT NULL AFTER `child_hydro_other_complain`,
	ADD COLUMN `child_hydro_history_antenatal_care` TEXT NULL AFTER `child_hydro_gender`,
	ADD COLUMN `child_hydro_perinatal` TEXT NULL AFTER `child_hydro_history_antenatal_care`,
	ADD COLUMN `child_hydro_developmental_status` TEXT NULL AFTER `child_hydro_perinatal`,
	ADD COLUMN `child_hydro_other_congenital_status` TEXT NULL AFTER `child_hydro_developmental_status`,
	ADD COLUMN `child_hydro_head_dismorphic` TEXT NULL AFTER `child_hydro_other_congenital_status`,
	ADD COLUMN `child_hydro_abdominal_mass` TEXT NULL AFTER `child_hydro_head_dismorphic`,
	ADD COLUMN `child_hydro_meningocele` TEXT NULL AFTER `child_hydro_abdominal_mass`,
	ADD COLUMN `child_hydro_limb` TEXT NULL AFTER `child_hydro_meningocele`,
	ADD COLUMN `child_hydro_urogical_flank` TEXT NULL AFTER `child_hydro_limb`,
	ADD COLUMN `child_hydro_urogical_suprapubic` TEXT NULL AFTER `child_hydro_urogical_flank`,
	ADD COLUMN `child_hydro_ext_genitalia` TEXT NULL AFTER `child_hydro_urogical_suprapubic`;

ALTER TABLE `kasus_physical_examination`   
	ADD COLUMN `testes_udt` TEXT NULL AFTER `penis_mass`,
	ADD COLUMN `glans_hole` TEXT NULL AFTER `child_hydro_ext_genitalia`,
	ADD COLUMN `glans_shape` TEXT NULL AFTER `glans_hole`,
	ADD COLUMN `meatus_size` TEXT NULL AFTER `glans_shape`,
	ADD COLUMN `meatus_position` TEXT NULL AFTER `meatus_size`,
	ADD COLUMN `phallus_size` TEXT NULL AFTER `meatus_position`,
	ADD COLUMN `phallus_urethral_plate` TEXT NULL AFTER `phallus_size`,
	ADD COLUMN `phallus_chordee` TEXT NULL AFTER `phallus_urethral_plate`,
	ADD COLUMN `torque_level` TEXT NULL AFTER `phallus_chordee`,
	ADD COLUMN `torque_direction` TEXT NULL AFTER `torque_level`,
	ADD COLUMN `foreskin_hooded` TEXT NULL AFTER `torque_direction`,
	ADD COLUMN `foreskin_size` TEXT NULL AFTER `foreskin_hooded`,
	ADD COLUMN `penoscotral_transposition` TEXT NULL AFTER `foreskin_size`,
	ADD COLUMN `penis_meas_penoscrotal_junction_tip` TEXT NULL AFTER `penoscotral_transposition`,
	ADD COLUMN `penis_meas_penoscrotal_junction_meatus` TEXT NULL AFTER `penis_meas_penoscrotal_junction_tip`,
	ADD COLUMN `penis_meas_meatus_tip` TEXT NULL AFTER `penis_meas_penoscrotal_junction_meatus`,
	ADD COLUMN `hormonal_manipulated_before_surgery` TEXT NULL AFTER `penis_meas_meatus_tip`,
	ADD COLUMN `hypospadia_others` TEXT NULL AFTER `hormonal_manipulated_before_surgery`,
	ADD COLUMN `hypospadia_congenital_abnormalitis` TEXT NULL AFTER `hypospadia_others`;

ALTER TABLE `kasus_operative_pre`   
	ADD COLUMN `chromosomal_analysis` TEXT NULL AFTER `hbsag_recipient`,
	ADD COLUMN `renogram` TEXT NULL AFTER `chromosomal_analysis`,
	ADD COLUMN `final_diagnosis` TEXT NULL AFTER `renogram`;


ALTER TABLE `kasus_operative_intra`   
	ADD COLUMN `urinary_diversion_cystostomy_size` TEXT NULL AFTER `urethral_implantation_others`,
	ADD COLUMN `urinary_diversion_ureter_cath_size` TEXT NULL AFTER `urinary_diversion_cystostomy_size`,
	ADD COLUMN `urinary_diversion_ureter_cath_pos` TEXT NULL AFTER `urinary_diversion_ureter_cath_size`;
