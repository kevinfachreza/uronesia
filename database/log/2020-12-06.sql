ALTER TABLE `urodatanesia`.`kasus_operative_pre`   
	ADD COLUMN `diagnosis_grade` VARCHAR(4) NULL AFTER `kasus_id`;


ALTER TABLE `urodatanesia`.`kasus_operative_intra`   
	ADD COLUMN `surgical_technique_primary_closure` TEXT NULL AFTER `surgical_technique`,
	ADD COLUMN `surgical_technique_graft_stsg` TEXT NULL AFTER `surgical_technique_primary_closure`,
	ADD COLUMN `surgical_technique_graft_ftsg` TEXT NULL AFTER `surgical_technique_graft_stsg`,
	ADD COLUMN `surgical_technique_one_stage` TEXT NULL AFTER `surgical_technique_graft_ftsg`,
	ADD COLUMN `surgical_technique_two_stage` TEXT NULL AFTER `surgical_technique_one_stage`,
	ADD COLUMN `surgical_technique_second_stage` TEXT NULL AFTER `surgical_technique_two_stage`;

ALTER TABLE `urodatanesia`.`kasus_operative_post`   
	ADD COLUMN `haematoma` TEXT NULL AFTER `analgetics`,
	ADD COLUMN `oedema_scrotum` TEXT NULL AFTER `haematoma`,
	ADD COLUMN `wound_dehicense` TEXT NULL AFTER `oedema_scrotum`;

	ALTER TABLE `urodatanesia`.`kasus_operative_pre`   
	ADD COLUMN `etiology` TEXT NULL AFTER `donor_relationship`;

