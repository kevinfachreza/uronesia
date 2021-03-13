ALTER TABLE `kasus_operative_post`   
	ADD COLUMN `nefrostomy_production_dx` TEXT NULL AFTER `nefrostomy_production`,
	ADD COLUMN `nefrostomy_production_sin` TEXT NULL AFTER `nefrostomy_production_dx`
	ADD COLUMN `urethral_cath_production` TEXT NULL AFTER `nefrostomy_production_sin`;

ALTER TABLE `kasus_operative_pre`   
	ADD COLUMN `diagnosis_p_infertile_sp_am_oligo` TEXT NULL AFTER `diagnosis_p_infertile_sperm_type`,
	ADD COLUMN `diagnosis_p_infertile_sp_am_astheno` TEXT NULL AFTER `diagnosis_p_infertile_sp_am_oligo`,
	ADD COLUMN `diagnosis_p_infertile_sp_am_teratos` TEXT NULL AFTER `diagnosis_p_infertile_sp_am_astheno`,
	ADD COLUMN `diagnosis_s_infertile_sp_am_oligo` TEXT NULL AFTER `diagnosis_s_infertile_sperm_type`,
	ADD COLUMN `diagnosis_s_infertile_sp_am_astheno` TEXT NULL AFTER `diagnosis_s_infertile_sp_am_oligo`,
	ADD COLUMN `diagnosis_s_infertile_sp_am_teratos` TEXT NULL AFTER `diagnosis_s_infertile_sp_am_astheno`;

ALTER TABLE `kasus_operative_intra`   
	ADD COLUMN `non_invasive_empiric_drug_name` TEXT NULL AFTER `non_invasive_empiric`,
	ADD COLUMN `non_invasive_hormonal_drug_name` TEXT NULL AFTER `non_invasive_hormonal`;


ALTER TABLE `kasus_operative_post`   
	ADD COLUMN `analgetics_iv` TEXT NULL AFTER `analgetics`,
	ADD COLUMN `analgetics_oral` TEXT NULL AFTER `analgetics_iv`;


ALTER TABLE `kasus_operative_post`   
	ADD COLUMN `analgetics_iv_drug` TEXT NULL AFTER `analgetics_iv`,
	ADD COLUMN `analgetics_oral_drug` TEXT NULL AFTER `analgetics_oral`;

ALTER TABLE `kasus_operative_intra`   
	ADD COLUMN `surgical_technique_laparoscopic` TEXT NULL AFTER `surgical_lithotripsi`;
