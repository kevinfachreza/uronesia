ALTER TABLE `uronesia`.`kasus`   
	ADD COLUMN `penunjang_lab_hb` VARCHAR(256) NULL AFTER `penunjang_lab`,
	ADD COLUMN `penunjang_lab_ht` VARCHAR(256) NULL AFTER `penunjang_lab_hb`,
	ADD COLUMN `penunjang_lab_l` VARCHAR(256) NULL AFTER `penunjang_lab_ht`,
	ADD COLUMN `penunjang_lab_tr` VARCHAR(256) NULL AFTER `penunjang_lab_l`,
	ADD COLUMN `penunjang_lab_ur` VARCHAR(256) NULL AFTER `penunjang_lab_tr`,
	ADD COLUMN `penunjang_lab_cr` VARCHAR(256) NULL AFTER `penunjang_lab_ur`,
	ADD COLUMN `penunjang_lab_bacteria` VARCHAR(256) NULL AFTER `penunjang_lab_cr`,
	ADD COLUMN `penunjang_lab_sensitive` VARCHAR(256) NULL AFTER `penunjang_lab_bacteria`,		/* Duplicate column name */
	ADD COLUMN `penunjang_lab_resistance` VARCHAR(256) NULL AFTER `penunjang_lab_sensitive`		/* Duplicate column name */;

ALTER TABLE `uronesia`.`kasus`   
	ADD COLUMN `ops_tindakan_dilatation_bougi` VARCHAR(255) NULL AFTER `ops_tindakan_asopa`,
	ADD COLUMN `ops_tindakan_dilatation_cold_knife` VARCHAR(255) NULL AFTER `ops_tindakan_dilatation_bougi`,
	ADD COLUMN `ops_tindakan_omental_wrap` VARCHAR(255) NULL AFTER `ops_tindakan_dilatation_cold_knife`,
	ADD COLUMN `ops_tindakan_non_transecting` VARCHAR(255) NULL AFTER `ops_tindakan_omental_wrap`,
	ADD COLUMN `ops_tindakan_staged` VARCHAR(255) NULL AFTER `ops_tindakan_non_transecting`,
	ADD COLUMN `ops_tindakan_ventral_inlay` VARCHAR(255) NULL AFTER `ops_tindakan_staged`,
	ADD COLUMN `ops_tindakan_ventral_onlay` VARCHAR(255) NULL AFTER `ops_tindakan_ventral_inlay`,
	ADD COLUMN `ops_tindakan_other` VARCHAR(255) NULL AFTER `ops_tindakan_ventral_onlay`,
	ADD COLUMN `ops_graft_preputial` VARCHAR(255) NULL AFTER `ops_tindakan_other`,
	ADD COLUMN `ops_graft_penlie_skin` VARCHAR(255) NULL AFTER `ops_graft_preputial`;

ALTER TABLE `uronesia`.`kasus`   
	ADD COLUMN `ops_tindakan_dilatation_shape` VARCHAR(255) NULL AFTER `ops_tindakan_dilatation_cold_knife`,
	ADD COLUMN `ops_tindakan_dilatation_laser` VARCHAR(255) NULL AFTER `ops_tindakan_dilatation_shape`;


ALTER TABLE `uronesia`.`kasus_uriflowmetry`   
	ADD COLUMN `residual_urine` TEXT NULL AFTER `advice`;
