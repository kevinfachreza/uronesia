ALTER TABLE `urodatanesia`.`kasus_operative_pre`   
	ADD COLUMN `case_type` VARCHAR(24) NULL AFTER `kasus_id`;

ALTER TABLE `u1001166_urodatanesia`.`kasus_operative_intra`   
	ADD COLUMN `surgical_technique_position` TEXT NULL AFTER `surgical_technique_second_stage`,
	ADD COLUMN `surgical_technique_open_desc` TEXT NULL AFTER `surgical_technique_position`,
	ADD COLUMN `complication_perf_desc` TEXT NULL AFTER `complication_desc`,
	ADD COLUMN `complication_intestinal_perf_desc` TEXT NULL AFTER `complication_perf_desc`,
	ADD COLUMN `complication_hydrothorax` TEXT NULL AFTER `complication_intestinal_perf_desc`,
	ADD COLUMN `pcnl_pos` TEXT NULL AFTER `failed_procedure_open_conversion`,
	ADD COLUMN `pcnl_time_cystocopy` TEXT NULL AFTER `pcnl_pos`,
	ADD COLUMN `pcnl_time_puncture` TEXT NULL AFTER `pcnl_time_cystocopy`,
	ADD COLUMN `pcnl_time_dilatation` TEXT NULL AFTER `pcnl_time_puncture`,
	ADD COLUMN `pcnl_time_lithotripsi` TEXT NULL AFTER `pcnl_time_dilatation`,
	ADD COLUMN `pcnl_time_dj_stent` TEXT NULL AFTER `pcnl_time_lithotripsi`,
	ADD COLUMN `pcnl_time_nefrostomy` TEXT NULL AFTER `pcnl_time_dj_stent`,
	ADD COLUMN `pcnl_time_total_time` TEXT NULL AFTER `pcnl_time_nefrostomy`,
	ADD COLUMN `pcnl_puncture_below_costa_12` TEXT NULL AFTER `pcnl_time_total_time`,
	ADD COLUMN `pcnl_puncture_above_costa_12` TEXT NULL AFTER `pcnl_puncture_below_costa_12`,
	ADD COLUMN `pcnl_puncture_above_costa_11` TEXT NULL AFTER `pcnl_puncture_above_costa_12`,
	ADD COLUMN `pcnl_puncture_type` TEXT NULL AFTER `pcnl_puncture_above_costa_11`,
	ADD COLUMN `pcnl_puncture_multi` TEXT NULL AFTER `pcnl_puncture_type`,
	ADD COLUMN `pcnl_dilatation_type` TEXT NULL AFTER `pcnl_puncture_multi`,
	ADD COLUMN `pcnl_dilatation_number` TEXT NULL AFTER `pcnl_dilatation_type`,
	ADD COLUMN `surgical_technique_urs` TEXT NULL AFTER `pcnl_dilatation_number`,
	ADD COLUMN `surgical_technique_rirs` TEXT NULL AFTER `surgical_technique_urs`,
	ADD COLUMN `surgical_vesico` TEXT NULL AFTER `surgical_technique_rirs`,
	ADD COLUMN `surgical_lithotripsi` TEXT NULL AFTER `surgical_vesico`,
	ADD COLUMN `fluoroscopy_is` TEXT NULL AFTER `surgical_lithotripsi`,
	ADD COLUMN `fluoroscopy_time` TEXT NULL AFTER `fluoroscopy_is`,
	ADD COLUMN `stone_frag_pneumatic` TEXT NULL AFTER `fluoroscopy_time`,
	ADD COLUMN `stone_frag_ultrasound` TEXT NULL AFTER `stone_frag_pneumatic`,
	ADD COLUMN `stone_frag_laser` TEXT NULL AFTER `stone_frag_ultrasound`,
	ADD COLUMN `stone_frag_lowsley` TEXT NULL AFTER `stone_frag_laser`,
	ADD COLUMN `stone_frag_stone_punch` TEXT NULL AFTER `stone_frag_lowsley`,
	ADD COLUMN `stone_frag_hendrikson` TEXT NULL AFTER `stone_frag_stone_punch`,
	ADD COLUMN `stone_frag_no` TEXT NULL AFTER `stone_frag_hendrikson`,
	ADD COLUMN `rest_stone_is` TEXT NULL AFTER `stone_frag_no`,
	ADD COLUMN `rest_stone_type` TEXT NULL AFTER `rest_stone_is`,
	ADD COLUMN `rest_stone_size_plan` TEXT NULL AFTER `rest_stone_type`;
	
ALTER TABLE `urodatanesia`.`kasus_operative_post`   
	ADD COLUMN `nefrostomy_production` TEXT NULL AFTER `wound_dehicense`,
	ADD COLUMN `cath_production` TEXT NULL AFTER `nefrostomy_production`,
	ADD COLUMN `transfusion` TEXT NULL AFTER `cath_production`;

ALTER TABLE `urodatanesia`.`kasus_operative_intra`   
	ADD COLUMN `surgical_technique_is_open` TEXT NULL AFTER `surgical_technique_position`;


ALTER TABLE `urodatanesia`.`kasus_operative_intra`   
	CHANGE `rest_stone_size_plan` `rest_stone_size` TEXT CHARSET utf8mb4 COLLATE utf8mb4_general_ci NULL,
	ADD COLUMN `rest_stone_plan` TEXT NULL AFTER `rest_stone_size`;
