ALTER TABLE `kasus_physical_examination`   
	ADD COLUMN `testes_right_size_normal` TEXT NULL AFTER `testes_hydrocele`,
	ADD COLUMN `testes_right_size_text` TEXT NULL AFTER `testes_right_size_normal`,
	ADD COLUMN `testes_right_consistency_normal` TEXT NULL AFTER `testes_right_size_text`,
	ADD COLUMN `testes_right_consistency_text` TEXT NULL AFTER `testes_right_consistency_normal`,
	ADD COLUMN `testes_right_hydrocele` TEXT NULL AFTER `testes_right_consistency_text`,
	ADD COLUMN `testes_left_size_normal` TEXT NULL AFTER `testes_right_palpable`,
	ADD COLUMN `testes_left_size_text` TEXT NULL AFTER `testes_left_size_normal`,
	ADD COLUMN `testes_left_consistency_normal` TEXT NULL AFTER `testes_left_size_text`,
	ADD COLUMN `testes_left_consistency_text` TEXT NULL AFTER `testes_left_consistency_normal`,
	ADD COLUMN `testes_left_hydrocele` TEXT NULL AFTER `testes_left_consistency_text`;

ALTER TABLE `kasus_physical_examination`   
	ADD COLUMN `inguinal_gland_right_size_normal` TEXT NULL AFTER `inguinal_gland_fixed`,
	ADD COLUMN `inguinal_gland_right_size_text` TEXT NULL AFTER `inguinal_gland_right_size_normal`,
	ADD COLUMN `inguinal_gland_left_size_normal` TEXT NULL AFTER `inguinal_gland_right_size_text`,
	ADD COLUMN `inguinal_gland_left_size_text` TEXT NULL AFTER `inguinal_gland_left_size_normal`,
	ADD COLUMN `inguinal_gland_right_fixed_normal` TEXT NULL AFTER `inguinal_gland_left_size_text`,
	ADD COLUMN `inguinal_gland_right_fixed_text` TEXT NULL AFTER `inguinal_gland_right_fixed_normal`,
	ADD COLUMN `inguinal_gland_left_fixed_normal` TEXT NULL AFTER `inguinal_gland_right_fixed_text`,
	ADD COLUMN `inguinal_gland_left_fixed_text` TEXT NULL AFTER `inguinal_gland_left_fixed_normal`;

ALTER TABLE `kasus_physical_examination`   
	ADD COLUMN `superclavicula_gland_left_size_normal` TEXT NULL AFTER `superclavicula_gland_fixed`,
	ADD COLUMN `superclavicula_gland_left_size_text` TEXT NULL AFTER `superclavicula_gland_left_size_normal`,
	ADD COLUMN `superclavicula_gland_left_fixed` TEXT NULL AFTER `superclavicula_gland_left_size_text`,
	ADD COLUMN `superclavicula_gland_right_size_normal` TEXT NULL AFTER `superclavicula_gland_left_fixed`,
	ADD COLUMN `superclavicula_gland_right_size_text` TEXT NULL AFTER `superclavicula_gland_right_size_normal`,
	ADD COLUMN `superclavicula_gland_right_fixed` TEXT NULL AFTER `superclavicula_gland_right_size_text`;

ALTER TABLE `kasus_physical_examination`   
	ADD COLUMN `testes_morphology_right_text` TEXT NULL AFTER `testes_morphology_right`,
	ADD COLUMN `testes_morphology_left_text` TEXT NULL AFTER `testes_morphology_left`;
