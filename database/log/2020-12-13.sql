ALTER TABLE `urodatanesia`.`kasus`   
	ADD COLUMN `marital_status` VARCHAR(24) NULL AFTER `bb`;

ALTER TABLE `urodatanesia`.`kasus_operative_pre`   
	ADD COLUMN `infertility_duration` TEXT NULL AFTER `surgical_history`,
	ADD COLUMN `total_child` TEXT NULL AFTER `infertility_duration`,
	ADD COLUMN `semen_discharge_ejaculation` TEXT NULL AFTER `total_child`,
	ADD COLUMN `erection_morning` TEXT NULL AFTER `semen_discharge_ejaculation`,
	ADD COLUMN `erection_stimulation` TEXT NULL AFTER `erection_morning`,
	ADD COLUMN `pain_post_ejaculation` TEXT NULL AFTER `erection_stimulation`,
	ADD COLUMN `hematospermia` TEXT NULL AFTER `pain_post_ejaculation`,
	ADD COLUMN `uretritis_history` TEXT NULL AFTER `hematospermia`,
	ADD COLUMN `iritative_symptomps` TEXT NULL AFTER `uretritis_history`,
	ADD COLUMN `secondary_sex_abnormalities` TEXT NULL AFTER `iritative_symptomps`,
	ADD COLUMN `other_congenital_disease` TEXT NULL AFTER `secondary_sex_abnormalities`,
	ADD COLUMN `scrotal_tenderness` TEXT NULL AFTER `other_congenital_disease`,
	ADD COLUMN `inguinal_mass` TEXT NULL AFTER `scrotal_tenderness`,
	ADD COLUMN `history_udt` TEXT NULL AFTER `inguinal_mass`,
	ADD COLUMN `history_varicocele` TEXT NULL AFTER `history_udt`,
	ADD COLUMN `history_trauma` TEXT NULL AFTER `history_varicocele`,
	ADD COLUMN `history_genital_surgery` TEXT NULL AFTER `history_trauma`,
	ADD COLUMN `history_reccurent` TEXT NULL AFTER `history_genital_surgery`,
	ADD COLUMN `history_uti` TEXT NULL AFTER `history_reccurent`,
	ADD COLUMN `history_malignancy` TEXT NULL AFTER `history_uti`,
	ADD COLUMN `history_others` TEXT NULL AFTER `history_malignancy`,
	ADD COLUMN `history_family_infertility` TEXT NULL AFTER `history_others`,
	ADD COLUMN `wife_status_past_pregnancy` TEXT NULL AFTER `history_family_infertility`,
	ADD COLUMN `wife_status_abortion` TEXT NULL AFTER `wife_status_past_pregnancy`,
	ADD COLUMN `wife_status_family_plan` TEXT NULL AFTER `wife_status_abortion`;

ALTER TABLE `urodatanesia`.`kasus_physical_examination`   
	ADD COLUMN `testes_orkidometer_dex` TEXT NULL AFTER `testes_left_palpable_size`,
	ADD COLUMN `testes_orkidometer_sin` TEXT NULL AFTER `testes_orkidometer_dex`,
	ADD COLUMN `testes_vol_dex` TEXT NULL AFTER `testes_orkidometer_sin`,
	ADD COLUMN `testes_vol_sin` TEXT NULL AFTER `testes_vol_dex`,
	ADD COLUMN `epididimis_normal` TEXT NULL AFTER `testes_vol_sin`,
	ADD COLUMN `epididimis_abnormal` TEXT NULL AFTER `epididimis_normal`,
	ADD COLUMN `epididimis_nodule` TEXT NULL AFTER `epididimis_abnormal`,
	ADD COLUMN `vas_deferens_normal` TEXT NULL AFTER `epididimis_nodule`,
	ADD COLUMN `vas_deferens_abnormal` TEXT NULL AFTER `vas_deferens_normal`,
	ADD COLUMN `vas_deferens_nodule` TEXT NULL AFTER `vas_deferens_abnormal`,
	ADD COLUMN `urethritis` TEXT NULL AFTER `vas_deferens_nodule`,
	ADD COLUMN `prostate_status` TEXT NULL AFTER `superclavicula_gland_fixed`;

ALTER TABLE `urodatanesia`.`kasus_penunjang_lab`   
	ADD COLUMN `date` DATE NULL AFTER `jenis`,
	ADD COLUMN `semen_volume` TEXT NULL AFTER `pathology_results`,
	ADD COLUMN `semen_sperm` TEXT NULL AFTER `semen_volume`,
	ADD COLUMN `semen_motility` TEXT NULL AFTER `semen_sperm`,
	ADD COLUMN `semen_normal_shape` TEXT NULL AFTER `semen_motility`,
	ADD COLUMN `fsh` TEXT NULL AFTER `semen_normal_shape`,
	ADD COLUMN `lh` TEXT NULL AFTER `fsh`,
	ADD COLUMN `testoteron` TEXT NULL AFTER `lh`;

ALTER TABLE `urodatanesia`.`kasus_penunjang_lab`   
	ADD COLUMN `other` TEXT NULL AFTER `testoteron`;

ALTER TABLE `urodatanesia`.`kasus_operative_pre`   
	ADD COLUMN `diagnosis_p_infertile_nonobs_azoo` TEXT NULL AFTER `diagnosis_grade`,
	ADD COLUMN `diagnosis_p_infertile_obs_azoo` TEXT NULL AFTER `diagnosis_p_infertile_nonobs_azoo`,
	ADD COLUMN `diagnosis_p_infertile_sperm_type` TEXT NULL AFTER `diagnosis_p_infertile_obs_azoo`,
	ADD COLUMN `diagnosis_s_infertile_nonobs_azoo` TEXT NULL AFTER `diagnosis_p_infertile_sperm_type`,
	ADD COLUMN `diagnosis_s_infertile_obs_azoo` TEXT NULL AFTER `diagnosis_s_infertile_nonobs_azoo`,
	ADD COLUMN `diagnosis_s_infertile_sperm_type` TEXT NULL AFTER `diagnosis_s_infertile_obs_azoo`;

ALTER TABLE `urodatanesia`.`kasus_operative_intra`   
	ADD COLUMN `non_invasive_empiric` TEXT NULL AFTER `rest_stone_plan`,
	ADD COLUMN `non_invasive_hormonal` TEXT NULL AFTER `non_invasive_empiric`,
	ADD COLUMN `invasive_mesa` TEXT NULL AFTER `non_invasive_hormonal`,
	ADD COLUMN `invasive_pesa` TEXT NULL AFTER `invasive_mesa`,
	ADD COLUMN `invasive_tesa` TEXT NULL AFTER `invasive_pesa`,
	ADD COLUMN `invasive_tese` TEXT NULL AFTER `invasive_tesa`,
	ADD COLUMN `invasive_anastomosis` TEXT NULL AFTER `invasive_tese`;

ALTER TABLE `urodatanesia`.`kasus_operative_post`   
	ADD COLUMN `follow_up_complaint` TEXT NULL AFTER `transfusion`,
	ADD COLUMN `follow_up_assessment` TEXT NULL AFTER `follow_up_complaint`,
	ADD COLUMN `follow_up_other` TEXT NULL AFTER `follow_up_assessment`;


ALTER TABLE `urodatanesia`.`kasus_operative_pre`   
	DROP COLUMN `history_uti`, 
	CHANGE `history_reccurent` `history_reccurent_uti` TEXT CHARSET utf8mb4 COLLATE utf8mb4_general_ci NULL;

ALTER TABLE `urodatanesia`.`kasus_physical_examination`   
	ADD COLUMN `testes_condition` TEXT NULL AFTER `testes_vol_sin`,
	ADD COLUMN `epididimis_condition` TEXT NULL AFTER `testes_condition`;

ALTER TABLE `urodatanesia`.`kasus_physical_examination`   
	ADD COLUMN `vas_deferens_condition` TEXT NULL AFTER `epididimis_nodule`;


ALTER TABLE `urodatanesia`.`kasus_operative_intra`   
	CHANGE `treatment_others` `treatment_others` TEXT CHARSET utf8mb4 COLLATE utf8mb4_general_ci NULL;


ALTER TABLE `urodatanesia`.`kasus_operative_intra`   
	ADD COLUMN `dj_stent_pos` TEXT NULL AFTER `dj_stent_size`,
	ADD COLUMN `dj_stent_duration` TEXT NULL AFTER `dj_stent_pos`,
	ADD COLUMN `urethro_sistocopy_diagnosis` TEXT NULL AFTER `invasive_anastomosis`,
	ADD COLUMN `bladder_mucosa_biopsy` TEXT NULL AFTER `urethro_sistocopy_diagnosis`,
	ADD COLUMN `rpg_pos` TEXT NULL AFTER `bladder_mucosa_biopsy`,
	ADD COLUMN `ureter_cath` TEXT NULL AFTER `rpg_pos`,
	ADD COLUMN `nefrostomy_type` TEXT NULL AFTER `ureter_cath`,
	ADD COLUMN `nefrostomy_pos` TEXT NULL AFTER `nefrostomy_type`,
	ADD COLUMN `trauma_ureter` TEXT NULL AFTER `nefrostomy_pos`,
	ADD COLUMN `trauma_bladder` TEXT NULL AFTER `trauma_ureter`,
	ADD COLUMN `trauma_urethra` TEXT NULL AFTER `trauma_bladder`,
	ADD COLUMN `trauma_action` TEXT NULL AFTER `trauma_urethra`,
	ADD COLUMN `identification` TEXT NULL AFTER `trauma_action`,
	ADD COLUMN `release` TEXT NULL AFTER `identification`,
	ADD COLUMN `obsgyn_operator` TEXT NULL AFTER `release`,
	ADD COLUMN `obsgyn_action` TEXT NULL AFTER `obsgyn_operator`;

ALTER TABLE `urodatanesia`.`kasus_operative_post`   
	ADD COLUMN `apg` TEXT NULL AFTER `follow_up_other`,
	ADD COLUMN `plan_type` TEXT NULL AFTER `apg`,
	ADD COLUMN `plan_duration` TEXT NULL AFTER `plan_type`;
