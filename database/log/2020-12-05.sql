ALTER TABLE `urodatanesia`.`kasus_operative_intra`   
	ADD COLUMN `cystostomy_desc` TEXT NULL AFTER `dj_stent_size`,
	ADD COLUMN `cystostomy_size` TEXT NULL AFTER `cystostomy_desc`;

ALTER TABLE `urodatanesia`.`kasus_operative_post`   
	ADD COLUMN `renogram` TEXT NULL AFTER `next_plan`;

ALTER TABLE `urodatanesia`.`kasus_physical_examination`   
	ADD COLUMN `bladder_gender` TEXT NULL AFTER `bladder_cloacal_extrophy`;
