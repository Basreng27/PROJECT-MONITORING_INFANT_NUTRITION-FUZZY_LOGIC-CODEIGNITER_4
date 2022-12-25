/*
 Navicat Premium Data Transfer

 Source Server         : LocalMySQL
 Source Server Type    : MySQL
 Source Server Version : 50733 (5.7.33)
 Source Host           : localhost:3306
 Source Schema         : monitoring_gizi

 Target Server Type    : MySQL
 Target Server Version : 50733 (5.7.33)
 File Encoding         : 65001

 Date: 25/12/2022 08:56:39
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for balita
-- ----------------------------
DROP TABLE IF EXISTS `balita`;
CREATE TABLE `balita`  (
  `id_balita` int(11) NOT NULL AUTO_INCREMENT,
  `nama_balita` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `id_jk_balita` int(1) NULL DEFAULT NULL,
  `id_ortu` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id_balita`) USING BTREE,
  INDEX `id_ortu`(`id_ortu`) USING BTREE,
  INDEX `id_jk_balita`(`id_jk_balita`) USING BTREE,
  CONSTRAINT `balita_ibfk_1` FOREIGN KEY (`id_ortu`) REFERENCES `ortu` (`id_ortu`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `balita_ibfk_2` FOREIGN KEY (`id_jk_balita`) REFERENCES `jk` (`id_jk`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of balita
-- ----------------------------
INSERT INTO `balita` VALUES (6, 'Eneng', 2, 4);

-- ----------------------------
-- Table structure for bb_pb
-- ----------------------------
DROP TABLE IF EXISTS `bb_pb`;
CREATE TABLE `bb_pb`  (
  `id_bb_pb` int(11) NOT NULL AUTO_INCREMENT,
  `panjang_badan_bb_pb` float NULL DEFAULT NULL,
  `min_3_sd` float NULL DEFAULT NULL,
  `min_2_sd` float NULL DEFAULT NULL,
  `min_1_sd` float NULL DEFAULT NULL,
  `median` float NULL DEFAULT NULL,
  `plus_1_sd` float NULL DEFAULT NULL,
  `plus_2_sd` float NULL DEFAULT NULL,
  `plus_3_sd` float NULL DEFAULT NULL,
  `id_jk_bb_pb` int(11) NULL DEFAULT NULL,
  `kategori_bb_pb` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id_bb_pb`) USING BTREE,
  INDEX `id_jk_bb_pb`(`id_jk_bb_pb`) USING BTREE,
  CONSTRAINT `bb_pb_ibfk_1` FOREIGN KEY (`id_jk_bb_pb`) REFERENCES `jk` (`id_jk`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 485 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of bb_pb
-- ----------------------------
INSERT INTO `bb_pb` VALUES (1, 45, 1.9, 2, 2.2, 2.4, 2.7, 3, 3.3, 1, 1);
INSERT INTO `bb_pb` VALUES (2, 45.5, 1.9, 2.1, 2.3, 2.5, 2.8, 3.1, 3.4, 1, 1);
INSERT INTO `bb_pb` VALUES (3, 46, 2, 2.2, 2.4, 2.6, 2.9, 3.1, 3.5, 1, 1);
INSERT INTO `bb_pb` VALUES (4, 46.5, 2.1, 2.3, 2.5, 2.7, 3, 3.2, 3.6, 1, 1);
INSERT INTO `bb_pb` VALUES (5, 47, 2.1, 2.3, 2.5, 2.8, 3, 3.3, 3.7, 1, 1);
INSERT INTO `bb_pb` VALUES (6, 47.5, 2.2, 2.4, 2.6, 2.9, 3.1, 3.4, 3.8, 1, 1);
INSERT INTO `bb_pb` VALUES (7, 48, 2.3, 2.5, 2.7, 2.9, 3.2, 3.6, 3.9, 1, 1);
INSERT INTO `bb_pb` VALUES (8, 48.5, 2.3, 2.6, 2.8, 3, 3.3, 3.7, 4, 1, 1);
INSERT INTO `bb_pb` VALUES (9, 49, 2.4, 2.6, 2.9, 3.1, 3.4, 3.8, 4.2, 1, 1);
INSERT INTO `bb_pb` VALUES (10, 49.5, 2.5, 2.7, 3, 3.2, 3.5, 3.9, 4.3, 1, 1);
INSERT INTO `bb_pb` VALUES (11, 50, 2.6, 2.8, 3, 3.3, 3.6, 4, 4.4, 1, 1);
INSERT INTO `bb_pb` VALUES (12, 50.5, 2.7, 2.9, 3.1, 3.4, 3.8, 4.1, 4.5, 1, 1);
INSERT INTO `bb_pb` VALUES (13, 51, 2.7, 3, 3.2, 3.5, 3.9, 4.2, 4.7, 1, 1);
INSERT INTO `bb_pb` VALUES (14, 51.5, 2.8, 3.1, 3.3, 3.6, 4, 4.4, 4.8, 1, 1);
INSERT INTO `bb_pb` VALUES (15, 52, 2.9, 3.2, 3.5, 3.8, 4.1, 4.5, 5, 1, 1);
INSERT INTO `bb_pb` VALUES (16, 52.5, 3, 3.3, 3.6, 3.9, 4.2, 4.6, 5.1, 1, 1);
INSERT INTO `bb_pb` VALUES (17, 53, 3.1, 3.4, 3.7, 4, 4.4, 4.8, 5.3, 1, 1);
INSERT INTO `bb_pb` VALUES (18, 53.5, 3.2, 3.5, 3.8, 4.1, 4.5, 4.9, 5.4, 1, 1);
INSERT INTO `bb_pb` VALUES (19, 54, 3.3, 3.6, 3.9, 4.3, 4.7, 5.1, 5.6, 1, 1);
INSERT INTO `bb_pb` VALUES (20, 54.5, 3.4, 3.7, 4, 4.4, 4.8, 5.3, 5.8, 1, 1);
INSERT INTO `bb_pb` VALUES (21, 55, 3.6, 3.8, 4.2, 4.5, 5, 5.4, 6, 1, 1);
INSERT INTO `bb_pb` VALUES (22, 55.5, 3.7, 4, 4.3, 4.7, 5.1, 5.6, 6.1, 1, 1);
INSERT INTO `bb_pb` VALUES (23, 56, 3.8, 4.1, 4.4, 4.8, 5.3, 5.8, 6.3, 1, 1);
INSERT INTO `bb_pb` VALUES (24, 56.5, 3.9, 4.2, 4.6, 5, 5.4, 5.9, 6.5, 1, 1);
INSERT INTO `bb_pb` VALUES (25, 57, 4, 4.3, 4.7, 5.1, 5.6, 6.1, 6.7, 1, 1);
INSERT INTO `bb_pb` VALUES (26, 57.5, 4.1, 4.5, 4.9, 5.3, 5.7, 6.3, 6.9, 1, 1);
INSERT INTO `bb_pb` VALUES (27, 58, 4.3, 4.6, 5, 5.4, 5.9, 6.4, 7.1, 1, 1);
INSERT INTO `bb_pb` VALUES (28, 58.5, 4.4, 4.7, 5.1, 5.6, 6.1, 6.6, 7.2, 1, 1);
INSERT INTO `bb_pb` VALUES (29, 59, 4.5, 4.8, 5.3, 5.7, 6.2, 6.8, 7.4, 1, 1);
INSERT INTO `bb_pb` VALUES (30, 59.5, 4.6, 5, 5.4, 5.9, 6.4, 7, 7.6, 1, 1);
INSERT INTO `bb_pb` VALUES (31, 60, 4.7, 5.1, 5.5, 6, 6.5, 7.1, 7.8, 1, 1);
INSERT INTO `bb_pb` VALUES (32, 60.5, 4.8, 5.2, 5.6, 6.1, 6.7, 7.3, 8, 1, 1);
INSERT INTO `bb_pb` VALUES (33, 61, 4.9, 5.3, 5.8, 6.3, 6.8, 7.4, 8.1, 1, 1);
INSERT INTO `bb_pb` VALUES (34, 61.5, 5, 5.4, 5.9, 6.4, 7, 7.6, 8.3, 1, 1);
INSERT INTO `bb_pb` VALUES (35, 62, 5.1, 5.6, 6, 6.5, 7.1, 7.7, 8.5, 1, 1);
INSERT INTO `bb_pb` VALUES (36, 62.5, 5.2, 5.7, 6.1, 6.7, 7.2, 7.9, 8.6, 1, 1);
INSERT INTO `bb_pb` VALUES (37, 63, 5.3, 5.8, 6.2, 6.8, 7.4, 8, 8.8, 1, 1);
INSERT INTO `bb_pb` VALUES (38, 63.5, 5.4, 5.9, 6.4, 6.9, 7.5, 8.2, 8.9, 1, 1);
INSERT INTO `bb_pb` VALUES (39, 64, 5.5, 6, 6.5, 7, 7.6, 8.3, 9.1, 1, 1);
INSERT INTO `bb_pb` VALUES (40, 64.5, 5.6, 6.1, 6.6, 7.1, 7.8, 8.5, 9.3, 1, 1);
INSERT INTO `bb_pb` VALUES (41, 65, 5.7, 6.2, 6.7, 7.3, 7.9, 8.6, 9.4, 1, 1);
INSERT INTO `bb_pb` VALUES (42, 65.5, 5.8, 6.3, 6.8, 7.4, 8, 8.7, 9.6, 1, 1);
INSERT INTO `bb_pb` VALUES (43, 66, 5.9, 6.4, 6.9, 7.5, 8.2, 8.9, 9.7, 1, 1);
INSERT INTO `bb_pb` VALUES (44, 66.5, 6, 6.5, 7, 7.6, 8.3, 9, 9.9, 1, 1);
INSERT INTO `bb_pb` VALUES (45, 67, 6.1, 6.6, 7.1, 7.7, 8.4, 9.2, 10, 1, 1);
INSERT INTO `bb_pb` VALUES (46, 67.5, 6.2, 6.7, 7.2, 7.9, 8.5, 9.3, 10.2, 1, 1);
INSERT INTO `bb_pb` VALUES (47, 68, 6.3, 6.8, 7.3, 8, 8.7, 9.4, 10.3, 1, 1);
INSERT INTO `bb_pb` VALUES (48, 68.5, 6.4, 6.9, 7.5, 8.1, 8.8, 9.6, 10.5, 1, 1);
INSERT INTO `bb_pb` VALUES (49, 69, 6.5, 7, 7.6, 8.2, 8.9, 9.7, 10.6, 1, 1);
INSERT INTO `bb_pb` VALUES (50, 69.5, 6.6, 7.1, 7.7, 8.3, 9, 9.8, 10.8, 1, 1);
INSERT INTO `bb_pb` VALUES (51, 70, 6.6, 7.2, 7.8, 8.4, 9.2, 10, 10.9, 1, 1);
INSERT INTO `bb_pb` VALUES (52, 70.5, 6.7, 7.3, 7.9, 8.5, 9.3, 10.1, 11.1, 1, 1);
INSERT INTO `bb_pb` VALUES (53, 71, 6.8, 7.4, 8, 8.6, 9.4, 10.2, 11.2, 1, 1);
INSERT INTO `bb_pb` VALUES (54, 71.5, 6.9, 7.5, 8.1, 8.8, 9.5, 10.4, 11.3, 1, 1);
INSERT INTO `bb_pb` VALUES (55, 72, 7, 7.6, 8.2, 8.9, 9.6, 10.5, 11.5, 1, 1);
INSERT INTO `bb_pb` VALUES (56, 72.5, 7.1, 7.6, 8.3, 9, 9.8, 10.6, 11.6, 1, 1);
INSERT INTO `bb_pb` VALUES (57, 73, 7.2, 7.7, 8.4, 9.1, 9.9, 10.8, 11.8, 1, 1);
INSERT INTO `bb_pb` VALUES (58, 73.5, 7.2, 7.8, 8.5, 9.2, 10, 10.9, 11.9, 1, 1);
INSERT INTO `bb_pb` VALUES (59, 74, 7.3, 7.9, 8.6, 9.3, 10.1, 11, 12.1, 1, 1);
INSERT INTO `bb_pb` VALUES (60, 74.5, 7.4, 8, 8.7, 9.4, 10.2, 11.2, 12.2, 1, 1);
INSERT INTO `bb_pb` VALUES (61, 75, 7.5, 8.1, 8.8, 9.5, 10.3, 11.3, 12.3, 1, 1);
INSERT INTO `bb_pb` VALUES (62, 75.5, 7.6, 8.2, 8.8, 9.6, 10.4, 11.4, 12.5, 1, 1);
INSERT INTO `bb_pb` VALUES (63, 76, 7.6, 8.3, 8.9, 9.7, 10.6, 11.5, 12.6, 1, 1);
INSERT INTO `bb_pb` VALUES (64, 76.5, 7.7, 8.3, 9, 9.8, 10.7, 11.6, 12.7, 1, 1);
INSERT INTO `bb_pb` VALUES (65, 77, 7.8, 8.4, 9.1, 9.9, 10.8, 11.7, 12.8, 1, 1);
INSERT INTO `bb_pb` VALUES (66, 77.5, 7.9, 8.5, 9.2, 10, 10.9, 11.9, 13, 1, 1);
INSERT INTO `bb_pb` VALUES (67, 78, 7.9, 8.6, 9.3, 10.1, 11, 12, 13.1, 1, 1);
INSERT INTO `bb_pb` VALUES (68, 78.5, 8, 8.7, 9.4, 10.2, 11.1, 12.1, 13.2, 1, 1);
INSERT INTO `bb_pb` VALUES (69, 79, 8.1, 8.7, 9.5, 10.3, 11.2, 12.2, 13.3, 1, 1);
INSERT INTO `bb_pb` VALUES (70, 79.5, 8.2, 8.8, 9.5, 10.4, 11.3, 12.3, 13.4, 1, 1);
INSERT INTO `bb_pb` VALUES (71, 80, 8.2, 8.9, 9.6, 10.4, 11.4, 12.4, 13.6, 1, 1);
INSERT INTO `bb_pb` VALUES (72, 80.5, 8.3, 9, 9.7, 10.5, 11.5, 12.5, 13.7, 1, 1);
INSERT INTO `bb_pb` VALUES (73, 81, 8.4, 9.1, 9.8, 10.6, 11.6, 12.6, 13.8, 1, 1);
INSERT INTO `bb_pb` VALUES (74, 81.5, 8.5, 9.1, 9.9, 10.7, 11.7, 12.7, 13.9, 1, 1);
INSERT INTO `bb_pb` VALUES (75, 82, 8.5, 9.2, 10, 10.8, 11.8, 12.8, 14, 1, 1);
INSERT INTO `bb_pb` VALUES (76, 82.5, 8.6, 9.3, 10.1, 10.9, 11.9, 13, 14.2, 1, 1);
INSERT INTO `bb_pb` VALUES (77, 83, 8.7, 9.4, 10.2, 11, 12, 13.1, 14.3, 1, 1);
INSERT INTO `bb_pb` VALUES (78, 83.5, 8.8, 9.5, 10.3, 11.2, 12.1, 13.2, 14.4, 1, 1);
INSERT INTO `bb_pb` VALUES (79, 84, 8.9, 9.6, 10.4, 11.3, 12.2, 13.3, 14.6, 1, 1);
INSERT INTO `bb_pb` VALUES (80, 84.5, 9, 9.7, 10.5, 11.4, 12.4, 13.5, 14.7, 1, 1);
INSERT INTO `bb_pb` VALUES (81, 85, 9.1, 9.8, 10.6, 11.5, 12.5, 13.6, 14.9, 1, 1);
INSERT INTO `bb_pb` VALUES (82, 85.5, 9.2, 9.9, 10.7, 11.6, 12.6, 13.7, 15, 1, 1);
INSERT INTO `bb_pb` VALUES (83, 86, 9.3, 10, 10.8, 11.7, 12.8, 13.9, 15.2, 1, 1);
INSERT INTO `bb_pb` VALUES (84, 86.5, 9.4, 10.1, 11, 11.9, 12.9, 14, 15.3, 1, 1);
INSERT INTO `bb_pb` VALUES (85, 87, 9.5, 10.2, 11.1, 12, 13, 14.2, 15.5, 1, 1);
INSERT INTO `bb_pb` VALUES (86, 87.5, 9.6, 10.4, 11.2, 12.1, 13.2, 14.3, 15.6, 1, 1);
INSERT INTO `bb_pb` VALUES (87, 88, 9.7, 10.5, 11.3, 12.2, 13.3, 14.5, 15.8, 1, 1);
INSERT INTO `bb_pb` VALUES (88, 88.5, 9.8, 10.6, 11.4, 12.4, 13.4, 14.6, 15.9, 1, 1);
INSERT INTO `bb_pb` VALUES (89, 89, 9.9, 10.7, 11.5, 12.5, 13.5, 14.7, 16.1, 1, 1);
INSERT INTO `bb_pb` VALUES (90, 89.5, 10, 10.8, 11.6, 12.6, 13.7, 14.9, 16.2, 1, 1);
INSERT INTO `bb_pb` VALUES (91, 90, 10.1, 10.9, 11.8, 12.7, 13.8, 15, 16.4, 1, 1);
INSERT INTO `bb_pb` VALUES (92, 90.5, 10.2, 11, 11.9, 12.8, 13.9, 15.1, 16.5, 1, 1);
INSERT INTO `bb_pb` VALUES (93, 91, 10.3, 11.1, 12, 13, 14.1, 15.3, 16.7, 1, 1);
INSERT INTO `bb_pb` VALUES (94, 91.5, 10.4, 11.2, 12.1, 13.1, 14.2, 15.4, 16.8, 1, 1);
INSERT INTO `bb_pb` VALUES (95, 92, 10.5, 11.3, 12.2, 13.2, 14.3, 15.6, 17, 1, 1);
INSERT INTO `bb_pb` VALUES (96, 92.5, 10.6, 11.4, 12.3, 13.3, 14.4, 15.7, 17.1, 1, 1);
INSERT INTO `bb_pb` VALUES (97, 93, 10.7, 11.5, 12.4, 13.4, 14.6, 15.8, 17.3, 1, 1);
INSERT INTO `bb_pb` VALUES (98, 93.5, 10.7, 11.6, 12.5, 13.5, 14.7, 16, 17.4, 1, 1);
INSERT INTO `bb_pb` VALUES (99, 94, 10.8, 11.7, 12.6, 13.7, 14.8, 16.1, 17.6, 1, 1);
INSERT INTO `bb_pb` VALUES (100, 94.5, 10.9, 11.8, 12.7, 13.8, 14.9, 16.3, 17.7, 1, 1);
INSERT INTO `bb_pb` VALUES (101, 95, 11, 11.9, 12.8, 13.9, 15.1, 16.4, 17.9, 1, 1);
INSERT INTO `bb_pb` VALUES (102, 95.5, 11.1, 12, 12.9, 14, 15.2, 16.5, 18, 1, 1);
INSERT INTO `bb_pb` VALUES (103, 96, 11.2, 12.1, 13.1, 14.1, 15.3, 16.7, 18.2, 1, 1);
INSERT INTO `bb_pb` VALUES (104, 96.5, 11.3, 12.2, 13.2, 14.3, 15.5, 16.8, 18.4, 1, 1);
INSERT INTO `bb_pb` VALUES (105, 97, 11.4, 12.3, 13.3, 14.4, 15.6, 17, 18.5, 1, 1);
INSERT INTO `bb_pb` VALUES (106, 97.5, 11.5, 12.4, 13.4, 14.5, 15.7, 17.1, 18.7, 1, 1);
INSERT INTO `bb_pb` VALUES (107, 98, 11.6, 12.5, 13.5, 14.6, 15.9, 17.3, 18.9, 1, 1);
INSERT INTO `bb_pb` VALUES (108, 98.5, 11.7, 12.6, 13.6, 14.8, 16, 17.5, 19.1, 1, 1);
INSERT INTO `bb_pb` VALUES (109, 99, 11.8, 12.7, 13.7, 14.9, 16.2, 17.6, 19.2, 1, 1);
INSERT INTO `bb_pb` VALUES (110, 99.5, 11.9, 12.8, 13.9, 15, 16.3, 17.8, 19.4, 1, 1);
INSERT INTO `bb_pb` VALUES (111, 100, 12, 12.9, 14, 15.2, 16.5, 18, 19.6, 1, 1);
INSERT INTO `bb_pb` VALUES (112, 100.5, 12.1, 13, 14.1, 15.3, 16.6, 18.1, 19.8, 1, 1);
INSERT INTO `bb_pb` VALUES (113, 101, 12.2, 13.2, 14.2, 15.4, 16.8, 18.3, 20, 1, 1);
INSERT INTO `bb_pb` VALUES (114, 101.5, 12.3, 13.3, 14.4, 15.6, 16.9, 18.5, 20.2, 1, 1);
INSERT INTO `bb_pb` VALUES (115, 102, 12.4, 13.4, 14.5, 15.7, 17.1, 18.7, 20.4, 1, 1);
INSERT INTO `bb_pb` VALUES (116, 102.5, 12.5, 13.5, 14.6, 15.9, 17.3, 18.8, 20.6, 1, 1);
INSERT INTO `bb_pb` VALUES (117, 103, 12.6, 13.6, 14.8, 16, 17.4, 19, 20.8, 1, 1);
INSERT INTO `bb_pb` VALUES (118, 103.5, 12.7, 13.7, 14.9, 16.2, 17.6, 19.2, 21, 1, 1);
INSERT INTO `bb_pb` VALUES (119, 104, 12.8, 13.9, 15, 16.3, 17.8, 19.4, 21.2, 1, 1);
INSERT INTO `bb_pb` VALUES (120, 104.5, 12.9, 14, 15.2, 16.5, 17.9, 19.6, 21.5, 1, 1);
INSERT INTO `bb_pb` VALUES (121, 105, 13, 14.1, 15.3, 16.6, 18.1, 19.8, 21.7, 1, 1);
INSERT INTO `bb_pb` VALUES (122, 105.5, 13.2, 14.2, 15.4, 16.8, 18.3, 20, 21.9, 1, 1);
INSERT INTO `bb_pb` VALUES (123, 106, 13.3, 14.4, 15.6, 16.9, 18.5, 20.2, 22.1, 1, 1);
INSERT INTO `bb_pb` VALUES (124, 106.5, 13.4, 14.5, 15.7, 17.1, 18.6, 20.4, 22.4, 1, 1);
INSERT INTO `bb_pb` VALUES (125, 107, 13.5, 14.6, 15.9, 17.3, 18.8, 20.6, 22.6, 1, 1);
INSERT INTO `bb_pb` VALUES (126, 107.5, 13.6, 14.7, 16, 17.4, 19, 20.8, 22.8, 1, 1);
INSERT INTO `bb_pb` VALUES (127, 108, 13.7, 14.9, 16.2, 17.6, 19.2, 21, 23.1, 1, 1);
INSERT INTO `bb_pb` VALUES (128, 108.5, 13.8, 15, 16.3, 17.8, 19.4, 21.2, 23.3, 1, 1);
INSERT INTO `bb_pb` VALUES (129, 109, 14, 15.1, 16.5, 17.9, 19.6, 21.4, 23.6, 1, 1);
INSERT INTO `bb_pb` VALUES (130, 109.5, 14.1, 15.3, 16.6, 18.1, 19.8, 21.7, 23.8, 1, 1);
INSERT INTO `bb_pb` VALUES (131, 110, 14.2, 15.4, 16.8, 18.3, 20, 21.9, 24.1, 1, 1);
INSERT INTO `bb_pb` VALUES (132, 65, 5.9, 6.3, 6.9, 7.4, 8.1, 8.8, 9.6, 1, 2);
INSERT INTO `bb_pb` VALUES (133, 65.5, 6, 6.4, 7, 7.6, 8.2, 8.9, 9.8, 1, 2);
INSERT INTO `bb_pb` VALUES (134, 66, 6.1, 6.5, 7.1, 7.7, 8.3, 9.1, 9.9, 1, 2);
INSERT INTO `bb_pb` VALUES (135, 66.5, 6.1, 6.6, 7.2, 7.8, 8.5, 9.2, 10.1, 1, 2);
INSERT INTO `bb_pb` VALUES (136, 67, 6.2, 6.7, 7.3, 7.9, 8.6, 9.4, 10.2, 1, 2);
INSERT INTO `bb_pb` VALUES (137, 67.5, 6.3, 6.8, 7.4, 8, 8.7, 9.5, 10.4, 1, 2);
INSERT INTO `bb_pb` VALUES (138, 68, 6.4, 6.9, 7.5, 8.1, 8.8, 9.6, 10.5, 1, 2);
INSERT INTO `bb_pb` VALUES (139, 68.5, 6.5, 7, 7.6, 8.2, 9, 9.8, 10.7, 1, 2);
INSERT INTO `bb_pb` VALUES (140, 69, 6.6, 7.1, 7.7, 8.4, 9.1, 9.9, 10.8, 1, 2);
INSERT INTO `bb_pb` VALUES (141, 69.5, 6.7, 7.2, 7.8, 8.5, 9.2, 10, 11, 1, 2);
INSERT INTO `bb_pb` VALUES (142, 70, 6.8, 7.3, 7.9, 8.6, 9.3, 10.2, 11.1, 1, 2);
INSERT INTO `bb_pb` VALUES (143, 70.5, 6.9, 7.4, 8, 8.7, 9.5, 10.3, 11.3, 1, 2);
INSERT INTO `bb_pb` VALUES (144, 71, 6.9, 7.5, 8.1, 8.8, 9.6, 10.4, 11.4, 1, 2);
INSERT INTO `bb_pb` VALUES (145, 71.5, 7, 7.6, 8.2, 8.9, 9.7, 10.6, 11.6, 1, 2);
INSERT INTO `bb_pb` VALUES (146, 72, 7.1, 7.7, 8.3, 9, 9.8, 10.7, 11.7, 1, 2);
INSERT INTO `bb_pb` VALUES (147, 72.5, 7.2, 7.8, 8.4, 9.1, 9.9, 10.8, 11.8, 1, 2);
INSERT INTO `bb_pb` VALUES (148, 73, 7.3, 7.9, 8.5, 9.2, 10, 11, 12, 1, 2);
INSERT INTO `bb_pb` VALUES (149, 73.5, 7.4, 7.9, 8.6, 9.3, 10.2, 11.1, 12.1, 1, 2);
INSERT INTO `bb_pb` VALUES (150, 74, 7.4, 8, 8.7, 9.4, 10.3, 11.2, 12.2, 1, 2);
INSERT INTO `bb_pb` VALUES (151, 74.5, 7.5, 8.1, 8.8, 9.5, 10.4, 11.3, 12.4, 1, 2);
INSERT INTO `bb_pb` VALUES (152, 75, 7.6, 8.2, 8.9, 9.6, 10.5, 11.4, 12.5, 1, 2);
INSERT INTO `bb_pb` VALUES (153, 75.5, 7.7, 8.3, 9, 9.7, 10.6, 11.6, 12.6, 1, 2);
INSERT INTO `bb_pb` VALUES (154, 76, 7.7, 8.4, 9.1, 9.8, 10.7, 11.7, 12.8, 1, 2);
INSERT INTO `bb_pb` VALUES (155, 76.5, 7.8, 8.5, 9.2, 9.9, 10.8, 11.8, 12.9, 1, 2);
INSERT INTO `bb_pb` VALUES (156, 77, 7.9, 8.5, 9.2, 10, 10.9, 11.9, 13, 1, 2);
INSERT INTO `bb_pb` VALUES (157, 77.5, 8, 8.6, 9.3, 10.1, 11, 12, 13.1, 1, 2);
INSERT INTO `bb_pb` VALUES (158, 78, 8, 8.7, 9.4, 10.2, 11.1, 12.1, 13.3, 1, 2);
INSERT INTO `bb_pb` VALUES (159, 78.5, 8.1, 8.8, 9.5, 10.3, 11.2, 12.2, 13.4, 1, 2);
INSERT INTO `bb_pb` VALUES (160, 79, 8.2, 8.8, 9.6, 10.4, 11.3, 12.3, 13.5, 1, 2);
INSERT INTO `bb_pb` VALUES (161, 79.5, 8.3, 8.9, 9.7, 10.5, 11.4, 12.4, 13.6, 1, 2);
INSERT INTO `bb_pb` VALUES (162, 80, 8.3, 9, 9.7, 10.6, 11.5, 12.6, 13.7, 1, 2);
INSERT INTO `bb_pb` VALUES (163, 80.5, 8.4, 9.1, 9.8, 10.7, 11.6, 12.7, 13.8, 1, 2);
INSERT INTO `bb_pb` VALUES (164, 81, 8.5, 9.2, 9.9, 10.8, 11.7, 12.8, 14, 1, 2);
INSERT INTO `bb_pb` VALUES (165, 81.5, 8.6, 9.3, 10, 10.9, 11.8, 12.9, 14.1, 1, 2);
INSERT INTO `bb_pb` VALUES (166, 82, 8.7, 9.3, 10.1, 11, 11.9, 13, 14.2, 1, 2);
INSERT INTO `bb_pb` VALUES (167, 82.5, 8.7, 9.4, 10.2, 11.1, 12.1, 13.1, 14.4, 1, 2);
INSERT INTO `bb_pb` VALUES (168, 83, 8.8, 9.5, 10.3, 11.2, 12.2, 13.3, 14.5, 1, 2);
INSERT INTO `bb_pb` VALUES (169, 83.5, 8.9, 9.6, 10.4, 11.3, 12.3, 13.4, 14.6, 1, 2);
INSERT INTO `bb_pb` VALUES (170, 84, 9, 9.7, 10.5, 11.4, 12.4, 13.5, 14.8, 1, 2);
INSERT INTO `bb_pb` VALUES (171, 84.5, 9.1, 9.9, 10.7, 11.5, 12.5, 13.7, 14.9, 1, 2);
INSERT INTO `bb_pb` VALUES (172, 85, 9.2, 10, 10.8, 11.7, 12.7, 13.8, 15.1, 1, 2);
INSERT INTO `bb_pb` VALUES (173, 85.5, 9.3, 10.1, 10.9, 11.8, 12.8, 13.9, 15.2, 1, 2);
INSERT INTO `bb_pb` VALUES (174, 86, 9.4, 10.2, 11, 11.9, 12.9, 14.1, 15.4, 1, 2);
INSERT INTO `bb_pb` VALUES (175, 86.5, 9.5, 10.3, 11.1, 12, 13.1, 14.2, 15.5, 1, 2);
INSERT INTO `bb_pb` VALUES (176, 87, 9.6, 10.4, 11.2, 12.2, 13.2, 14.4, 15.7, 1, 2);
INSERT INTO `bb_pb` VALUES (177, 87.5, 9.7, 10.5, 11.3, 12.3, 13.3, 14.5, 15.8, 1, 2);
INSERT INTO `bb_pb` VALUES (178, 88, 9.8, 10.6, 11.5, 12.4, 13.5, 14.7, 16, 1, 2);
INSERT INTO `bb_pb` VALUES (179, 88.5, 9.9, 10.7, 11.6, 12.5, 13.6, 14.8, 16.1, 1, 2);
INSERT INTO `bb_pb` VALUES (180, 89, 10, 10.8, 11.7, 12.6, 13.7, 14.9, 16.3, 1, 2);
INSERT INTO `bb_pb` VALUES (181, 89.5, 10.1, 10.9, 11.8, 12.8, 13.9, 15.1, 16.4, 1, 2);
INSERT INTO `bb_pb` VALUES (182, 90, 10.2, 11, 11.9, 12.9, 14, 15.2, 16.6, 1, 2);
INSERT INTO `bb_pb` VALUES (183, 90.5, 10.3, 11.1, 12, 13, 14.1, 15.3, 16.7, 1, 2);
INSERT INTO `bb_pb` VALUES (184, 91, 10.4, 11.2, 12.1, 13.1, 14.2, 15.5, 16.9, 1, 2);
INSERT INTO `bb_pb` VALUES (185, 91.5, 10.5, 11.3, 12.2, 13.2, 14.4, 15.6, 17, 1, 2);
INSERT INTO `bb_pb` VALUES (186, 92, 10.6, 11.4, 12.3, 13.4, 14.5, 15.8, 17.2, 1, 2);
INSERT INTO `bb_pb` VALUES (187, 92.5, 10.7, 11.5, 12.4, 13.5, 14.6, 15.9, 17.3, 1, 2);
INSERT INTO `bb_pb` VALUES (188, 93, 10.8, 11.6, 12.6, 13.6, 14.7, 16, 17.5, 1, 2);
INSERT INTO `bb_pb` VALUES (189, 93.5, 10.9, 11.7, 12.7, 13.7, 14.9, 16.2, 17.6, 1, 2);
INSERT INTO `bb_pb` VALUES (190, 94, 11, 11.8, 12.8, 13.8, 15, 16.3, 17.8, 1, 2);
INSERT INTO `bb_pb` VALUES (191, 94.5, 11.1, 11.9, 12.9, 13.9, 15.1, 16.5, 17.9, 1, 2);
INSERT INTO `bb_pb` VALUES (192, 95, 11.1, 12, 13, 14.1, 15.3, 16.6, 18.1, 1, 2);
INSERT INTO `bb_pb` VALUES (193, 95.5, 11.2, 12.1, 13.1, 14.2, 15.4, 16.7, 18.3, 1, 2);
INSERT INTO `bb_pb` VALUES (194, 96, 11.3, 12.2, 13.2, 14.3, 15.5, 16.9, 18.4, 1, 2);
INSERT INTO `bb_pb` VALUES (195, 96.5, 11.4, 12.3, 13.3, 14.4, 15.7, 17, 18.6, 1, 2);
INSERT INTO `bb_pb` VALUES (196, 97, 11.5, 12.4, 13.4, 14.6, 15.8, 17.2, 18.8, 1, 2);
INSERT INTO `bb_pb` VALUES (197, 97.5, 11.6, 12.5, 13.6, 14.7, 15.9, 17.4, 18.9, 1, 2);
INSERT INTO `bb_pb` VALUES (198, 98, 11.7, 12.6, 13.7, 14.8, 16.1, 17.5, 19.1, 1, 2);
INSERT INTO `bb_pb` VALUES (199, 98.5, 11.8, 12.8, 13.8, 14.9, 16.2, 17.7, 19.3, 1, 2);
INSERT INTO `bb_pb` VALUES (200, 99, 11.9, 12.9, 13.9, 15.1, 16.4, 17.9, 19.5, 1, 2);
INSERT INTO `bb_pb` VALUES (201, 99.5, 12, 13, 14, 15.2, 16.5, 18, 19.7, 1, 2);
INSERT INTO `bb_pb` VALUES (202, 100, 12.1, 13.1, 14.2, 15.4, 16.7, 18.2, 19.9, 1, 2);
INSERT INTO `bb_pb` VALUES (203, 100.5, 12.2, 13.2, 14.3, 15.5, 16.9, 18.4, 20.1, 1, 2);
INSERT INTO `bb_pb` VALUES (204, 101, 12.3, 13.3, 14.4, 15.6, 17, 18.5, 20.3, 1, 2);
INSERT INTO `bb_pb` VALUES (205, 101.5, 12.4, 13.4, 14.5, 15.8, 17.2, 18.7, 20.5, 1, 2);
INSERT INTO `bb_pb` VALUES (206, 102, 12.5, 13.6, 14.7, 15.9, 17.3, 18.9, 20.7, 1, 2);
INSERT INTO `bb_pb` VALUES (207, 102.5, 12.6, 13.7, 14.8, 16.1, 17.5, 19.1, 20.9, 1, 2);
INSERT INTO `bb_pb` VALUES (208, 103, 12.8, 13.8, 14.9, 16.2, 17.7, 19.3, 21.1, 1, 2);
INSERT INTO `bb_pb` VALUES (209, 103.5, 12.9, 13.9, 15.1, 16.4, 17.8, 19.5, 21.3, 1, 2);
INSERT INTO `bb_pb` VALUES (210, 104, 13, 14, 15.2, 16.5, 18, 19.7, 21.6, 1, 2);
INSERT INTO `bb_pb` VALUES (211, 104.5, 13.1, 14.2, 15.4, 16.7, 18.2, 19.9, 21.8, 1, 2);
INSERT INTO `bb_pb` VALUES (212, 105, 13.2, 14.3, 15.5, 16.8, 18.4, 20.1, 22, 1, 2);
INSERT INTO `bb_pb` VALUES (213, 105.5, 13.3, 14.4, 15.6, 17, 18.5, 20.3, 22.2, 1, 2);
INSERT INTO `bb_pb` VALUES (214, 106, 13.4, 14.5, 15.8, 17.2, 18.7, 20.5, 22.5, 1, 2);
INSERT INTO `bb_pb` VALUES (215, 106.5, 13.5, 14.7, 15.9, 17.3, 18.9, 20.7, 22.7, 1, 2);
INSERT INTO `bb_pb` VALUES (216, 107, 13.7, 14.8, 16.1, 17.5, 19.1, 20.9, 22.9, 1, 2);
INSERT INTO `bb_pb` VALUES (217, 107.5, 13.8, 14.9, 16.2, 17.7, 19.3, 21.1, 23.2, 1, 2);
INSERT INTO `bb_pb` VALUES (218, 108, 13.9, 15.1, 16.4, 17.8, 19.5, 21.3, 23.4, 1, 2);
INSERT INTO `bb_pb` VALUES (219, 108.5, 14, 15.2, 16.5, 18, 19.7, 21.5, 23.7, 1, 2);
INSERT INTO `bb_pb` VALUES (220, 109, 14.1, 15.3, 16.7, 18.2, 19.8, 21.8, 23.9, 1, 2);
INSERT INTO `bb_pb` VALUES (221, 109.5, 14.3, 15.5, 16.8, 18.3, 20, 22, 24.2, 1, 2);
INSERT INTO `bb_pb` VALUES (222, 110, 14.4, 15.6, 17, 18.5, 20.2, 22.2, 24.4, 1, 2);
INSERT INTO `bb_pb` VALUES (223, 110.5, 14.5, 15.8, 17.1, 18.7, 20.4, 22.4, 24.7, 1, 2);
INSERT INTO `bb_pb` VALUES (224, 111, 14.6, 15.9, 17.3, 18.9, 20.7, 22.7, 25, 1, 2);
INSERT INTO `bb_pb` VALUES (225, 111.5, 14.8, 16, 17.5, 19.1, 20.9, 22.9, 25.2, 1, 2);
INSERT INTO `bb_pb` VALUES (226, 112, 14.9, 16.2, 17.6, 19.2, 21.1, 23.1, 25.5, 1, 2);
INSERT INTO `bb_pb` VALUES (227, 112.5, 15, 16.3, 17.8, 19.4, 21.3, 23.4, 25.8, 1, 2);
INSERT INTO `bb_pb` VALUES (228, 113, 15.2, 16.5, 18, 19.6, 21.5, 23.6, 26, 1, 2);
INSERT INTO `bb_pb` VALUES (229, 113.5, 15.3, 16.6, 18.1, 19.8, 21.7, 23.9, 26.3, 1, 2);
INSERT INTO `bb_pb` VALUES (230, 114, 15.4, 16.8, 18.3, 20, 21.9, 24.1, 26.6, 1, 2);
INSERT INTO `bb_pb` VALUES (231, 114.5, 15.6, 16.9, 18.5, 20.2, 22.1, 24.4, 26.9, 1, 2);
INSERT INTO `bb_pb` VALUES (232, 115, 15.7, 17.1, 18.6, 20.4, 22.4, 24.6, 27.2, 1, 2);
INSERT INTO `bb_pb` VALUES (233, 115.5, 15.8, 17.2, 18.8, 20.6, 22.6, 24.9, 27.5, 1, 2);
INSERT INTO `bb_pb` VALUES (234, 116, 16, 17.4, 19, 20.8, 22.8, 25.1, 27.8, 1, 2);
INSERT INTO `bb_pb` VALUES (235, 116.5, 16.1, 17.5, 19.2, 21, 23, 25.4, 28, 1, 2);
INSERT INTO `bb_pb` VALUES (236, 117, 16.2, 17.7, 19.3, 21.2, 23.3, 25.6, 28.3, 1, 2);
INSERT INTO `bb_pb` VALUES (237, 117.5, 16.4, 17.9, 19.5, 21.4, 23.5, 25.9, 28.6, 1, 2);
INSERT INTO `bb_pb` VALUES (238, 118, 16.5, 18, 19.7, 21.6, 23.7, 26.1, 28.9, 1, 2);
INSERT INTO `bb_pb` VALUES (239, 118.5, 16.7, 18.2, 19.9, 21.8, 23.9, 26.4, 29.2, 1, 2);
INSERT INTO `bb_pb` VALUES (240, 119, 16.8, 18.3, 20, 22, 24.1, 26.6, 29.5, 1, 2);
INSERT INTO `bb_pb` VALUES (241, 119.5, 16.9, 18.5, 20.2, 22.2, 24.4, 26.9, 29.8, 1, 2);
INSERT INTO `bb_pb` VALUES (242, 120, 17.1, 18.6, 20.4, 22.4, 24.6, 27.2, 30.1, 1, 2);
INSERT INTO `bb_pb` VALUES (243, 45, 1.9, 2.1, 2.3, 2.5, 2.7, 3, 3.3, 2, 1);
INSERT INTO `bb_pb` VALUES (244, 45.5, 2, 2.1, 2.3, 2.5, 2.8, 3.1, 3.4, 2, 1);
INSERT INTO `bb_pb` VALUES (245, 46, 2, 2.2, 2.4, 2.6, 2.9, 3.2, 3.5, 2, 1);
INSERT INTO `bb_pb` VALUES (246, 46.5, 2.1, 2.3, 2.5, 2.7, 3, 3.3, 3.6, 2, 1);
INSERT INTO `bb_pb` VALUES (247, 47, 2.2, 2.4, 2.6, 2.8, 3.1, 3.4, 3.7, 2, 1);
INSERT INTO `bb_pb` VALUES (248, 47.5, 2.2, 2.4, 2.6, 2.9, 3.2, 3.5, 3.8, 2, 1);
INSERT INTO `bb_pb` VALUES (249, 48, 2.3, 2.5, 2.7, 3, 3.3, 3.6, 4, 2, 1);
INSERT INTO `bb_pb` VALUES (250, 48.5, 2.4, 2.6, 2.8, 3.1, 3.4, 3.7, 4.1, 2, 1);
INSERT INTO `bb_pb` VALUES (251, 49, 2.4, 2.6, 2.9, 3.2, 3.5, 3.8, 4.2, 2, 1);
INSERT INTO `bb_pb` VALUES (252, 49.5, 2.5, 2.7, 3, 3.3, 3.6, 3.9, 4.3, 2, 1);
INSERT INTO `bb_pb` VALUES (253, 50, 2.6, 2.8, 3.1, 3.4, 3.7, 4, 4.5, 2, 1);
INSERT INTO `bb_pb` VALUES (254, 50.5, 2.7, 2.9, 3.2, 3.5, 3.8, 4.2, 4.6, 2, 1);
INSERT INTO `bb_pb` VALUES (255, 51, 2.8, 3, 3.3, 3.6, 3.9, 4.3, 4.8, 2, 1);
INSERT INTO `bb_pb` VALUES (256, 51.5, 2.8, 3.1, 3.4, 3.7, 4, 4.4, 4.9, 2, 1);
INSERT INTO `bb_pb` VALUES (257, 52, 2.9, 3.2, 3.5, 3.8, 4.2, 4.6, 5.1, 2, 1);
INSERT INTO `bb_pb` VALUES (258, 52.5, 3, 3.3, 3.6, 3.9, 4.3, 4.7, 5.2, 2, 1);
INSERT INTO `bb_pb` VALUES (259, 53, 3.1, 3.4, 3.7, 4, 4.4, 4.9, 5.4, 2, 1);
INSERT INTO `bb_pb` VALUES (260, 53.5, 3.2, 3.5, 3.8, 4.2, 4.6, 5, 5.5, 2, 1);
INSERT INTO `bb_pb` VALUES (261, 54, 3.3, 3.6, 3.9, 4.3, 4.7, 5.2, 5.7, 2, 1);
INSERT INTO `bb_pb` VALUES (262, 54.5, 3.4, 3.7, 4, 4.4, 4.8, 5.3, 5.9, 2, 1);
INSERT INTO `bb_pb` VALUES (263, 55, 3.5, 3.8, 4.2, 4.5, 5, 5.5, 6.1, 2, 1);
INSERT INTO `bb_pb` VALUES (264, 55.5, 3.6, 3.9, 4.3, 4.7, 5.1, 5.7, 6.3, 2, 1);
INSERT INTO `bb_pb` VALUES (265, 56, 3.7, 4, 4.4, 4.8, 5.3, 5.8, 6.4, 2, 1);
INSERT INTO `bb_pb` VALUES (266, 56.5, 3.8, 4.1, 4.5, 5, 5.4, 6, 6.6, 2, 1);
INSERT INTO `bb_pb` VALUES (267, 57, 3.9, 4.3, 4.6, 5.1, 5.6, 6.1, 6.8, 2, 1);
INSERT INTO `bb_pb` VALUES (268, 57.5, 4, 4.4, 4.8, 5.2, 5.7, 6.3, 7, 2, 1);
INSERT INTO `bb_pb` VALUES (269, 58, 4.1, 4.5, 4.9, 5.4, 5.9, 6.5, 7.1, 2, 1);
INSERT INTO `bb_pb` VALUES (270, 58.5, 4.2, 4.6, 5, 5.5, 6, 6.6, 7.3, 2, 1);
INSERT INTO `bb_pb` VALUES (271, 59, 4.3, 4.7, 5.1, 5.6, 6.2, 6.8, 7.5, 2, 1);
INSERT INTO `bb_pb` VALUES (272, 59.5, 4.4, 4.8, 5.3, 5.7, 6.3, 6.9, 7.7, 2, 1);
INSERT INTO `bb_pb` VALUES (273, 60, 4.5, 4.9, 5.4, 5.9, 6.4, 7.1, 7.8, 2, 1);
INSERT INTO `bb_pb` VALUES (274, 60.5, 4.6, 5, 5.5, 6, 6.6, 7.3, 8, 2, 1);
INSERT INTO `bb_pb` VALUES (275, 61, 4.7, 5.1, 5.6, 6.1, 6.7, 7.4, 8.2, 2, 1);
INSERT INTO `bb_pb` VALUES (276, 61.5, 4.8, 5.2, 5.7, 6.3, 6.9, 7.6, 8.4, 2, 1);
INSERT INTO `bb_pb` VALUES (277, 62, 4.9, 5.3, 5.8, 6.4, 7, 7.7, 8.5, 2, 1);
INSERT INTO `bb_pb` VALUES (278, 62.5, 5, 5.4, 5.9, 6.5, 7.1, 7.8, 8.7, 2, 1);
INSERT INTO `bb_pb` VALUES (279, 63, 5.1, 5.5, 6, 6.6, 7.3, 8, 8.8, 2, 1);
INSERT INTO `bb_pb` VALUES (280, 63.5, 5.2, 5.6, 6.2, 6.7, 7.4, 8.1, 9, 2, 1);
INSERT INTO `bb_pb` VALUES (281, 64, 5.3, 5.7, 6.3, 6.9, 7.5, 8.3, 9.1, 2, 1);
INSERT INTO `bb_pb` VALUES (282, 64.5, 5.4, 5.8, 6.4, 7, 7.6, 8.4, 9.3, 2, 1);
INSERT INTO `bb_pb` VALUES (283, 65, 5.5, 5.9, 6.5, 7.1, 7.8, 8.6, 9.5, 2, 1);
INSERT INTO `bb_pb` VALUES (284, 65.5, 5.5, 6, 6.6, 7.2, 7.9, 8.7, 9.6, 2, 1);
INSERT INTO `bb_pb` VALUES (285, 66, 5.6, 6.1, 6.7, 7.3, 8, 8.8, 9.8, 2, 1);
INSERT INTO `bb_pb` VALUES (286, 66.5, 5.7, 6.2, 6.8, 7.4, 8.1, 9, 9.9, 2, 1);
INSERT INTO `bb_pb` VALUES (287, 67, 5.8, 6.3, 6.9, 7.5, 8.3, 9.1, 10, 2, 1);
INSERT INTO `bb_pb` VALUES (288, 67.5, 5.9, 6.4, 7, 7.6, 8.4, 9.2, 10.2, 2, 1);
INSERT INTO `bb_pb` VALUES (289, 68, 6, 6.5, 7.1, 7.7, 8.5, 9.4, 10.3, 2, 1);
INSERT INTO `bb_pb` VALUES (290, 68.5, 6.1, 6.6, 7.2, 7.9, 8.6, 9.5, 10.5, 2, 1);
INSERT INTO `bb_pb` VALUES (291, 69, 6.1, 6.7, 7.3, 8, 8.7, 9.6, 10.6, 2, 1);
INSERT INTO `bb_pb` VALUES (292, 69.5, 6.2, 6.8, 7.4, 8.1, 8.8, 9.7, 10.7, 2, 1);
INSERT INTO `bb_pb` VALUES (293, 70, 6.3, 6.9, 7.5, 8.2, 9, 9.9, 10.9, 2, 1);
INSERT INTO `bb_pb` VALUES (294, 70.5, 6.4, 6.9, 7.6, 8.3, 9.1, 10, 11, 2, 1);
INSERT INTO `bb_pb` VALUES (295, 71, 6.5, 7, 7.7, 8.4, 9.2, 10.1, 11.1, 2, 1);
INSERT INTO `bb_pb` VALUES (296, 71.5, 6.5, 7.1, 7.7, 8.5, 9.3, 10.2, 11.3, 2, 1);
INSERT INTO `bb_pb` VALUES (297, 72, 6.6, 7.2, 7.8, 8.6, 9.4, 10.3, 11.4, 2, 1);
INSERT INTO `bb_pb` VALUES (298, 72.5, 6.7, 7.3, 7.9, 8.7, 9.5, 10.5, 11.5, 2, 1);
INSERT INTO `bb_pb` VALUES (299, 73, 6.8, 7.4, 8, 8.8, 9.6, 10.6, 11.7, 2, 1);
INSERT INTO `bb_pb` VALUES (300, 73.5, 6.9, 7.4, 8.1, 8.9, 9.7, 10.7, 11.8, 2, 1);
INSERT INTO `bb_pb` VALUES (301, 74, 6.9, 7.5, 8.2, 9, 9.8, 10.8, 11.9, 2, 1);
INSERT INTO `bb_pb` VALUES (302, 74.5, 7, 7.6, 8.3, 9.1, 9.9, 10.9, 12, 2, 1);
INSERT INTO `bb_pb` VALUES (303, 75, 7.1, 7.7, 8.4, 9.1, 10, 11, 12.2, 2, 1);
INSERT INTO `bb_pb` VALUES (304, 75.5, 7.1, 7.8, 8.5, 9.2, 10.1, 11.1, 12.3, 2, 1);
INSERT INTO `bb_pb` VALUES (305, 76, 7.2, 7.8, 8.5, 9.3, 10.2, 11.2, 12.4, 2, 1);
INSERT INTO `bb_pb` VALUES (306, 76.5, 7.3, 7.9, 8.6, 9.4, 10.3, 11.4, 12.5, 2, 1);
INSERT INTO `bb_pb` VALUES (307, 77, 7.4, 8, 8.7, 9.5, 10.4, 11.5, 12.6, 2, 1);
INSERT INTO `bb_pb` VALUES (308, 77.5, 7.4, 8.1, 8.8, 9.6, 10.5, 11.6, 12.8, 2, 1);
INSERT INTO `bb_pb` VALUES (309, 78, 7.5, 8.2, 8.9, 9.7, 10.6, 11.7, 12.9, 2, 1);
INSERT INTO `bb_pb` VALUES (310, 78.5, 7.6, 8.2, 9, 9.8, 10.7, 11.8, 13, 2, 1);
INSERT INTO `bb_pb` VALUES (311, 79, 7.7, 8.3, 9.1, 9.9, 10.8, 11.9, 13.1, 2, 1);
INSERT INTO `bb_pb` VALUES (312, 79.5, 7.7, 8.4, 9.1, 10, 10.9, 12, 13.3, 2, 1);
INSERT INTO `bb_pb` VALUES (313, 80, 7.8, 8.5, 9.2, 10.1, 11, 12.1, 13.4, 2, 1);
INSERT INTO `bb_pb` VALUES (314, 80.5, 7.9, 8.6, 9.3, 10.2, 11.2, 12.3, 13.5, 2, 1);
INSERT INTO `bb_pb` VALUES (315, 81, 8, 8.7, 9.4, 10.3, 11.3, 12.4, 13.7, 2, 1);
INSERT INTO `bb_pb` VALUES (316, 81.5, 8.1, 8.8, 9.5, 10.4, 11.4, 12.5, 13.8, 2, 1);
INSERT INTO `bb_pb` VALUES (317, 82, 8.1, 8.8, 9.6, 10.5, 11.5, 12.6, 13.9, 2, 1);
INSERT INTO `bb_pb` VALUES (318, 82.5, 8.2, 8.9, 9.7, 10.6, 11.6, 12.8, 14.1, 2, 1);
INSERT INTO `bb_pb` VALUES (319, 83, 8.3, 9, 9.8, 10.7, 11.8, 12.9, 14.2, 2, 1);
INSERT INTO `bb_pb` VALUES (320, 83.5, 8.4, 9.1, 9.9, 10.9, 11.9, 13.1, 14.4, 2, 1);
INSERT INTO `bb_pb` VALUES (321, 84, 8.5, 9.2, 10.1, 11, 12, 13.2, 14.5, 2, 1);
INSERT INTO `bb_pb` VALUES (322, 84.5, 8.6, 9.3, 10.2, 11.1, 12.1, 13.3, 14.7, 2, 1);
INSERT INTO `bb_pb` VALUES (323, 85, 8.7, 9.4, 10.3, 11.2, 12.3, 13.5, 14.9, 2, 1);
INSERT INTO `bb_pb` VALUES (324, 85.5, 8.8, 9.5, 10.4, 11.3, 12.4, 13.6, 15, 2, 1);
INSERT INTO `bb_pb` VALUES (325, 86, 8.9, 9.7, 10.5, 11.5, 12.6, 13.8, 15.2, 2, 1);
INSERT INTO `bb_pb` VALUES (326, 86.5, 9, 9.8, 10.6, 11.6, 12.7, 13.9, 15.4, 2, 1);
INSERT INTO `bb_pb` VALUES (327, 87, 9.1, 9.9, 10.7, 11.7, 12.8, 14.1, 15.5, 2, 1);
INSERT INTO `bb_pb` VALUES (328, 87.5, 9.2, 10, 10.9, 11.8, 13, 14.2, 15.7, 2, 1);
INSERT INTO `bb_pb` VALUES (329, 88, 9.3, 10.1, 11, 12, 13.1, 14.4, 15.9, 2, 1);
INSERT INTO `bb_pb` VALUES (330, 88.5, 9.4, 10.2, 11.1, 12.1, 13.2, 14.5, 16, 2, 1);
INSERT INTO `bb_pb` VALUES (331, 89, 9.5, 10.3, 11.2, 12.2, 13.4, 14.7, 16.2, 2, 1);
INSERT INTO `bb_pb` VALUES (332, 89.5, 9.6, 10.4, 11.3, 12.3, 13.5, 14.8, 16.4, 2, 1);
INSERT INTO `bb_pb` VALUES (333, 90, 9.7, 10.5, 11.4, 12.5, 13.7, 15, 16.5, 2, 1);
INSERT INTO `bb_pb` VALUES (334, 90.5, 9.8, 10.6, 11.5, 12.6, 13.8, 15.1, 16.7, 2, 1);
INSERT INTO `bb_pb` VALUES (335, 91, 9.9, 10.7, 11.7, 12.7, 13.9, 15.3, 16.9, 2, 1);
INSERT INTO `bb_pb` VALUES (336, 91.5, 10, 10.8, 11.8, 12.8, 14.1, 15.5, 17, 2, 1);
INSERT INTO `bb_pb` VALUES (337, 92, 10.1, 10.9, 11.9, 13, 14.2, 15.6, 17.2, 2, 1);
INSERT INTO `bb_pb` VALUES (338, 92.5, 10.1, 11, 12, 13.1, 14.3, 15.8, 17.4, 2, 1);
INSERT INTO `bb_pb` VALUES (339, 93, 10.2, 11.1, 12.1, 13.2, 14.5, 15.9, 17.5, 2, 1);
INSERT INTO `bb_pb` VALUES (340, 93.5, 10.3, 11.2, 12.2, 13.3, 14.6, 16.1, 17.7, 2, 1);
INSERT INTO `bb_pb` VALUES (341, 94, 10.4, 11.3, 12.3, 13.5, 14.7, 16.2, 17.9, 2, 1);
INSERT INTO `bb_pb` VALUES (342, 94.5, 10.5, 11.4, 12.4, 13.6, 14.9, 16.4, 18, 2, 1);
INSERT INTO `bb_pb` VALUES (343, 95, 10.6, 11.5, 12.6, 13.7, 15, 16.5, 18.2, 2, 1);
INSERT INTO `bb_pb` VALUES (344, 95.5, 10.7, 11.6, 12.7, 13.8, 15.2, 16.7, 18.4, 2, 1);
INSERT INTO `bb_pb` VALUES (345, 96, 10.8, 11.7, 12.8, 14, 15.3, 16.8, 18.6, 2, 1);
INSERT INTO `bb_pb` VALUES (346, 96.5, 10.9, 11.8, 12.9, 14.1, 15.4, 17, 18.7, 2, 1);
INSERT INTO `bb_pb` VALUES (347, 97, 11, 12, 13, 14.2, 15.6, 17.1, 18.9, 2, 1);
INSERT INTO `bb_pb` VALUES (348, 97.5, 11.1, 12.1, 13.1, 14.4, 15.7, 17.3, 19.1, 2, 1);
INSERT INTO `bb_pb` VALUES (349, 98, 11.2, 12.2, 13.3, 14.5, 15.9, 17.5, 19.3, 2, 1);
INSERT INTO `bb_pb` VALUES (350, 98.5, 11.3, 12.3, 13.4, 14.6, 16, 17.6, 19.5, 2, 1);
INSERT INTO `bb_pb` VALUES (351, 99, 11.4, 12.4, 13.5, 14.8, 16.2, 17.8, 19.6, 2, 1);
INSERT INTO `bb_pb` VALUES (352, 99.5, 11.5, 12.5, 13.6, 14.9, 16.3, 18, 19.8, 2, 1);
INSERT INTO `bb_pb` VALUES (353, 100, 11.6, 12.6, 13.7, 15, 16.5, 18.1, 20, 2, 1);
INSERT INTO `bb_pb` VALUES (354, 100.5, 11.7, 12.7, 13.9, 15.2, 16.6, 18.3, 20.2, 2, 1);
INSERT INTO `bb_pb` VALUES (355, 101, 11.8, 12.8, 14, 15.3, 16.8, 18.5, 20.4, 2, 1);
INSERT INTO `bb_pb` VALUES (356, 101.5, 11.9, 13, 14.1, 15.5, 17, 18.7, 20.6, 2, 1);
INSERT INTO `bb_pb` VALUES (357, 102, 12, 13.1, 14.3, 15.6, 17.1, 18.9, 20.8, 2, 1);
INSERT INTO `bb_pb` VALUES (358, 102.5, 12.1, 13.2, 14.4, 15.8, 17.3, 19, 21, 2, 1);
INSERT INTO `bb_pb` VALUES (359, 103, 12.3, 13.3, 14.5, 15.9, 17.5, 19.2, 21.3, 2, 1);
INSERT INTO `bb_pb` VALUES (360, 103.5, 12.4, 13.5, 14.7, 16.1, 17.6, 19.4, 21.5, 2, 1);
INSERT INTO `bb_pb` VALUES (361, 104, 12.5, 13.6, 14.8, 16.2, 17.8, 19.6, 21.7, 2, 1);
INSERT INTO `bb_pb` VALUES (362, 104.5, 12.6, 13.7, 15, 16.4, 18, 19.8, 21.9, 2, 1);
INSERT INTO `bb_pb` VALUES (363, 105, 12.7, 13.8, 15.1, 16.5, 18.2, 20, 22.2, 2, 1);
INSERT INTO `bb_pb` VALUES (364, 105.5, 12.8, 14, 15.3, 16.7, 18.4, 20.2, 22.4, 2, 1);
INSERT INTO `bb_pb` VALUES (365, 106, 13, 14.1, 15.4, 16.9, 18.5, 20.5, 22.6, 2, 1);
INSERT INTO `bb_pb` VALUES (366, 106.5, 13.1, 14.3, 15.6, 17.1, 18.7, 20.7, 22.9, 2, 1);
INSERT INTO `bb_pb` VALUES (367, 107, 13.2, 14.4, 15.7, 17.2, 18.9, 20.9, 23.1, 2, 1);
INSERT INTO `bb_pb` VALUES (368, 107.5, 13.3, 14.5, 15.9, 17.4, 19.1, 21.1, 23.4, 2, 1);
INSERT INTO `bb_pb` VALUES (369, 108, 13.5, 14.7, 16, 17.6, 19.3, 21.3, 23.6, 2, 1);
INSERT INTO `bb_pb` VALUES (370, 108.5, 13.6, 14.8, 16.2, 17.8, 19.5, 21.6, 23.9, 2, 1);
INSERT INTO `bb_pb` VALUES (371, 109, 13.7, 15, 16.4, 18, 19.7, 21.8, 24.2, 2, 1);
INSERT INTO `bb_pb` VALUES (372, 109.5, 13.9, 15.1, 16.5, 18.1, 20, 22, 24.4, 2, 1);
INSERT INTO `bb_pb` VALUES (373, 110, 14, 15.3, 16.7, 18.3, 20.2, 22.3, 24.7, 2, 1);
INSERT INTO `bb_pb` VALUES (374, 65, 5.6, 6.1, 6.6, 7.2, 7.9, 8.7, 9.7, 2, 2);
INSERT INTO `bb_pb` VALUES (375, 65.5, 5.7, 6.2, 6.7, 7.4, 8.1, 8.9, 9.8, 2, 2);
INSERT INTO `bb_pb` VALUES (376, 66, 5.8, 6.3, 6.8, 7.5, 8.2, 9, 10, 2, 2);
INSERT INTO `bb_pb` VALUES (377, 66.5, 5.8, 6.4, 6.9, 7.6, 8.3, 9.1, 10.1, 2, 2);
INSERT INTO `bb_pb` VALUES (378, 67, 5.9, 6.4, 7, 7.7, 8.4, 9.3, 10.2, 2, 2);
INSERT INTO `bb_pb` VALUES (379, 67.5, 6, 6.5, 7.1, 7.8, 8.5, 9.4, 10.4, 2, 2);
INSERT INTO `bb_pb` VALUES (380, 68, 6.1, 6.6, 7.2, 7.9, 8.7, 9.5, 10.5, 2, 2);
INSERT INTO `bb_pb` VALUES (381, 68.5, 6.2, 6.7, 7.3, 8, 8.8, 9.7, 10.7, 2, 2);
INSERT INTO `bb_pb` VALUES (382, 69, 6.3, 6.8, 7.4, 8.1, 8.9, 9.8, 10.8, 2, 2);
INSERT INTO `bb_pb` VALUES (383, 69.5, 6, 6.9, 7.5, 8.2, 9, 9.9, 10.9, 2, 2);
INSERT INTO `bb_pb` VALUES (384, 70, 6.4, 7, 7.6, 8.3, 9.1, 10, 11.1, 2, 2);
INSERT INTO `bb_pb` VALUES (385, 70.5, 6.5, 7.1, 7.7, 8.4, 9.2, 10.1, 11.2, 2, 2);
INSERT INTO `bb_pb` VALUES (386, 71, 6.6, 7.1, 7.8, 8.5, 9.3, 10.3, 11.3, 2, 2);
INSERT INTO `bb_pb` VALUES (387, 71.5, 6.7, 7.2, 7.9, 8.6, 9.4, 10.4, 11.5, 2, 2);
INSERT INTO `bb_pb` VALUES (388, 72, 6.7, 7.3, 8, 8.7, 9.5, 10.5, 11.6, 2, 2);
INSERT INTO `bb_pb` VALUES (389, 72.5, 6.8, 7.4, 8.1, 8.8, 9.7, 10.6, 11.7, 2, 2);
INSERT INTO `bb_pb` VALUES (390, 73, 6.9, 7.5, 8.1, 8.9, 9.8, 10.7, 11.8, 2, 2);
INSERT INTO `bb_pb` VALUES (391, 73.5, 7, 7.6, 8.2, 9, 9.9, 10.8, 12, 2, 2);
INSERT INTO `bb_pb` VALUES (392, 74, 7, 7.6, 8.3, 9.1, 10, 11, 12.1, 2, 2);
INSERT INTO `bb_pb` VALUES (393, 74.5, 7.1, 7.7, 8.4, 9.2, 10.1, 11.1, 12.2, 2, 2);
INSERT INTO `bb_pb` VALUES (394, 75, 7.2, 7.8, 8.5, 9.3, 10.2, 11.2, 12.3, 2, 2);
INSERT INTO `bb_pb` VALUES (395, 75.5, 7.2, 7.9, 8.6, 9.4, 10.3, 11.3, 12.5, 2, 2);
INSERT INTO `bb_pb` VALUES (396, 76, 7.3, 8, 8.7, 9.5, 10.4, 11.4, 12.6, 2, 2);
INSERT INTO `bb_pb` VALUES (397, 76.5, 7.4, 8, 8.7, 9.6, 10.5, 11.5, 12.7, 2, 2);
INSERT INTO `bb_pb` VALUES (398, 77, 7.5, 8.1, 8.8, 9.6, 10.6, 11.6, 12.8, 2, 2);
INSERT INTO `bb_pb` VALUES (399, 77.5, 7.5, 8.2, 8.9, 9.7, 10.7, 11.7, 12.9, 2, 2);
INSERT INTO `bb_pb` VALUES (400, 78, 7.6, 8.3, 9, 9.8, 10.8, 11.8, 13.1, 2, 2);
INSERT INTO `bb_pb` VALUES (401, 78.5, 7.7, 8.4, 9.1, 9.9, 10.9, 12, 13.2, 2, 2);
INSERT INTO `bb_pb` VALUES (402, 79, 7.8, 8.4, 9.2, 10, 11, 12.1, 13.3, 2, 2);
INSERT INTO `bb_pb` VALUES (403, 79.5, 7.8, 8.5, 9.3, 10.1, 11.1, 12.2, 13.4, 2, 2);
INSERT INTO `bb_pb` VALUES (404, 80, 7.9, 8.6, 9.4, 10.2, 11.2, 12.3, 13.6, 2, 2);
INSERT INTO `bb_pb` VALUES (405, 80.5, 8, 8.7, 9.5, 10.3, 11.3, 12.4, 13.7, 2, 2);
INSERT INTO `bb_pb` VALUES (406, 81, 8.1, 8.8, 9.6, 10.4, 11.4, 12.6, 13.9, 2, 2);
INSERT INTO `bb_pb` VALUES (407, 81.5, 8.2, 8.9, 9.7, 10.6, 11.6, 12.7, 14, 2, 2);
INSERT INTO `bb_pb` VALUES (408, 82, 8.3, 9, 9.8, 10.7, 11.7, 12.8, 14.1, 2, 2);
INSERT INTO `bb_pb` VALUES (409, 82.5, 8.4, 9.1, 9.9, 10.8, 11.8, 13, 14.3, 2, 2);
INSERT INTO `bb_pb` VALUES (410, 83, 8.5, 9.2, 10, 10.9, 11.9, 13.1, 14.5, 2, 2);
INSERT INTO `bb_pb` VALUES (411, 83.5, 8.5, 9.3, 10.1, 11, 12.1, 13.3, 14.6, 2, 2);
INSERT INTO `bb_pb` VALUES (412, 84, 8.6, 9.4, 10.2, 11.1, 12.2, 13.4, 14.8, 2, 2);
INSERT INTO `bb_pb` VALUES (413, 84.5, 8.7, 9.5, 10.3, 11.3, 12.3, 13.5, 14.9, 2, 2);
INSERT INTO `bb_pb` VALUES (414, 85, 8.8, 9.6, 10.4, 11.4, 12.5, 13.7, 15.1, 2, 2);
INSERT INTO `bb_pb` VALUES (415, 85.5, 8.9, 9.7, 10.6, 11.5, 12.6, 13.8, 15.3, 2, 2);
INSERT INTO `bb_pb` VALUES (416, 86, 9, 9.8, 10.7, 11.6, 12.7, 14, 15.4, 2, 2);
INSERT INTO `bb_pb` VALUES (417, 86.5, 9.1, 9.9, 10.8, 11.8, 12.9, 14.2, 15.6, 2, 2);
INSERT INTO `bb_pb` VALUES (418, 87, 9.2, 10, 10.9, 11.9, 13, 14.3, 15.8, 2, 2);
INSERT INTO `bb_pb` VALUES (419, 87.5, 9.3, 10.1, 11, 12, 13.2, 14.5, 15.9, 2, 2);
INSERT INTO `bb_pb` VALUES (420, 88, 9.4, 10.2, 11.1, 12.1, 13.3, 14.6, 16.1, 2, 2);
INSERT INTO `bb_pb` VALUES (421, 88.5, 9.5, 10.3, 11.2, 12.3, 13.4, 14.8, 16.3, 2, 2);
INSERT INTO `bb_pb` VALUES (422, 89, 9.6, 10.4, 11.4, 12.4, 13.6, 14.9, 16.4, 2, 2);
INSERT INTO `bb_pb` VALUES (423, 89.5, 9.7, 10.5, 11.5, 12.5, 13.7, 15.1, 16.6, 2, 2);
INSERT INTO `bb_pb` VALUES (424, 90, 9.8, 10.6, 11.6, 12.6, 13.8, 15.2, 16.8, 2, 2);
INSERT INTO `bb_pb` VALUES (425, 90.5, 9.9, 10.7, 11.7, 12.8, 14, 15.4, 16.9, 2, 2);
INSERT INTO `bb_pb` VALUES (426, 91, 10, 10.9, 11.8, 12.9, 14.1, 15.5, 17.1, 2, 2);
INSERT INTO `bb_pb` VALUES (427, 91.5, 10.1, 11, 11.9, 13, 14.3, 15.7, 17.3, 2, 2);
INSERT INTO `bb_pb` VALUES (428, 92, 10.2, 11.1, 12, 13.1, 14.4, 15.8, 17.4, 2, 2);
INSERT INTO `bb_pb` VALUES (429, 92.5, 10.3, 11.2, 12.1, 13.3, 14.5, 16, 17.6, 2, 2);
INSERT INTO `bb_pb` VALUES (430, 93, 10.4, 11.3, 12.3, 13.4, 14.7, 16.1, 17.8, 2, 2);
INSERT INTO `bb_pb` VALUES (431, 93.5, 10.5, 11.4, 12.4, 13.5, 14.8, 16.3, 17.9, 2, 2);
INSERT INTO `bb_pb` VALUES (432, 94, 10.6, 11.5, 12.5, 13.6, 14.9, 16.4, 18.1, 2, 2);
INSERT INTO `bb_pb` VALUES (433, 94.5, 10.7, 11.6, 12.6, 13.8, 15.1, 16.6, 18.3, 2, 2);
INSERT INTO `bb_pb` VALUES (434, 95, 10.8, 11.7, 12.7, 13.9, 15.2, 16.7, 18.5, 2, 2);
INSERT INTO `bb_pb` VALUES (435, 95.5, 10.8, 11.8, 12.8, 14, 15.4, 16.9, 18.6, 2, 2);
INSERT INTO `bb_pb` VALUES (436, 96, 10.9, 11.9, 12.9, 14.1, 15.5, 17, 18.8, 2, 2);
INSERT INTO `bb_pb` VALUES (437, 96.5, 11, 12, 13.1, 14.3, 15.6, 17.2, 19, 2, 2);
INSERT INTO `bb_pb` VALUES (438, 97, 11.1, 12.1, 13.2, 14.4, 15.8, 17.4, 19.2, 2, 2);
INSERT INTO `bb_pb` VALUES (439, 97.5, 11.2, 12.2, 13.3, 14.5, 15.9, 17.5, 19.3, 2, 2);
INSERT INTO `bb_pb` VALUES (440, 98, 11.3, 12.3, 13.4, 14.7, 16.1, 17.7, 19.5, 2, 2);
INSERT INTO `bb_pb` VALUES (441, 98.5, 11.4, 12.4, 13.5, 14.8, 16.2, 17.9, 19.7, 2, 2);
INSERT INTO `bb_pb` VALUES (442, 99, 11.5, 12.5, 13.7, 14.9, 16.4, 18, 19.9, 2, 2);
INSERT INTO `bb_pb` VALUES (443, 99.5, 11.6, 12.7, 13.8, 15.1, 16.5, 18.2, 20.1, 2, 2);
INSERT INTO `bb_pb` VALUES (444, 100, 11.7, 12.8, 13.9, 15.2, 16.7, 18.4, 20.3, 2, 2);
INSERT INTO `bb_pb` VALUES (445, 100.5, 11.9, 12.9, 14.1, 15.4, 16.9, 18.6, 20.5, 2, 2);
INSERT INTO `bb_pb` VALUES (446, 101, 12, 13, 14.2, 15.5, 17, 18.7, 20.7, 2, 2);
INSERT INTO `bb_pb` VALUES (447, 101.5, 12.1, 13.1, 14.3, 15.7, 17.2, 18.9, 20.9, 2, 2);
INSERT INTO `bb_pb` VALUES (448, 102, 12.2, 13.3, 14.5, 15.8, 17.4, 19.1, 21.1, 2, 2);
INSERT INTO `bb_pb` VALUES (449, 102.5, 12.3, 13.4, 14.6, 16, 17.5, 19.3, 21.4, 2, 2);
INSERT INTO `bb_pb` VALUES (450, 103, 12.4, 13.5, 14.7, 16.1, 17.7, 19.5, 21.6, 2, 2);
INSERT INTO `bb_pb` VALUES (451, 103.5, 12.5, 13.6, 14.9, 16.3, 17.9, 19.7, 21.8, 2, 2);
INSERT INTO `bb_pb` VALUES (452, 104, 12.6, 13.8, 15, 16.4, 18.1, 19.9, 22, 2, 2);
INSERT INTO `bb_pb` VALUES (453, 104.5, 12.8, 13.9, 15.2, 16.6, 18.2, 20.1, 22.3, 2, 2);
INSERT INTO `bb_pb` VALUES (454, 105, 12.9, 14, 15.3, 16.8, 18.4, 20.3, 22.5, 2, 2);
INSERT INTO `bb_pb` VALUES (455, 105.5, 13, 14.2, 15.5, 16.9, 18.6, 20.5, 22.7, 2, 2);
INSERT INTO `bb_pb` VALUES (456, 106, 13.1, 14.3, 15.6, 17.1, 18.8, 20.8, 23, 2, 2);
INSERT INTO `bb_pb` VALUES (457, 106.5, 13.3, 14.5, 15.8, 17.3, 19, 21, 23.2, 2, 2);
INSERT INTO `bb_pb` VALUES (458, 107, 13.4, 14.6, 15.9, 17.5, 19.2, 21.2, 23.5, 2, 2);
INSERT INTO `bb_pb` VALUES (459, 107.5, 13.5, 14.7, 16.1, 17.7, 19.4, 21.4, 23.7, 2, 2);
INSERT INTO `bb_pb` VALUES (460, 108, 13.7, 14.9, 16.3, 17.8, 19.6, 21.7, 24, 2, 2);
INSERT INTO `bb_pb` VALUES (461, 108.5, 13.8, 15, 16.4, 18, 19.8, 21.9, 24.3, 2, 2);
INSERT INTO `bb_pb` VALUES (462, 109, 13.9, 15.2, 16.6, 18.2, 20, 22.1, 24.5, 2, 2);
INSERT INTO `bb_pb` VALUES (463, 109.5, 14.1, 15.4, 16.8, 18.4, 20.3, 22.4, 24.8, 2, 2);
INSERT INTO `bb_pb` VALUES (464, 110, 14.2, 15.5, 17, 18.6, 20.5, 22.6, 25.1, 2, 2);
INSERT INTO `bb_pb` VALUES (465, 110.5, 14.4, 15.7, 17.1, 18.8, 20.7, 22.9, 25.4, 2, 2);
INSERT INTO `bb_pb` VALUES (466, 111, 14.5, 15.8, 17.3, 19, 20.9, 23.1, 25.7, 2, 2);
INSERT INTO `bb_pb` VALUES (467, 111.5, 14.7, 16, 17.5, 19.2, 21.2, 23.4, 26, 2, 2);
INSERT INTO `bb_pb` VALUES (468, 112, 14.8, 16.2, 17.7, 19.4, 21.4, 23.6, 26.2, 2, 2);
INSERT INTO `bb_pb` VALUES (469, 112.5, 15, 16.3, 17.9, 19.6, 21.6, 23.9, 26.5, 2, 2);
INSERT INTO `bb_pb` VALUES (470, 113, 15.1, 16.5, 18, 19.8, 21.8, 24.2, 26.8, 2, 2);
INSERT INTO `bb_pb` VALUES (471, 113.5, 15.3, 16.7, 18.2, 20, 22.1, 24.4, 27.1, 2, 2);
INSERT INTO `bb_pb` VALUES (472, 114, 15.4, 16.8, 18.4, 20.2, 22.3, 24.7, 27.4, 2, 2);
INSERT INTO `bb_pb` VALUES (473, 114.5, 15.6, 17, 18.6, 20.5, 22.6, 25, 27.8, 2, 2);
INSERT INTO `bb_pb` VALUES (474, 115, 15.7, 17.2, 18.8, 20.7, 22.8, 25.2, 28.1, 2, 2);
INSERT INTO `bb_pb` VALUES (475, 115.5, 15.9, 17.3, 19, 20.9, 23, 25.5, 28.4, 2, 2);
INSERT INTO `bb_pb` VALUES (476, 116, 16, 17.5, 19.2, 21.1, 23.3, 25.8, 28.7, 2, 2);
INSERT INTO `bb_pb` VALUES (477, 116.5, 16.2, 17.7, 19.4, 21.3, 23.5, 26.1, 29, 2, 2);
INSERT INTO `bb_pb` VALUES (478, 117, 16.3, 17.8, 19.6, 21.5, 23.8, 26.3, 29.3, 2, 2);
INSERT INTO `bb_pb` VALUES (479, 117.5, 16.5, 18, 19.8, 21.7, 24, 26.6, 29.6, 2, 2);
INSERT INTO `bb_pb` VALUES (480, 118, 16.6, 18.2, 19.9, 22, 24.2, 26.9, 29.9, 2, 2);
INSERT INTO `bb_pb` VALUES (481, 118.5, 16.8, 18.4, 20.1, 22.2, 24.5, 27.2, 30.3, 2, 2);
INSERT INTO `bb_pb` VALUES (482, 119, 16.9, 18.5, 20.3, 22.4, 24.7, 27.4, 30.6, 2, 2);
INSERT INTO `bb_pb` VALUES (483, 119.5, 17.1, 18.7, 20.5, 22.6, 25, 27.7, 30.9, 2, 2);
INSERT INTO `bb_pb` VALUES (484, 120, 17.3, 18.9, 20.7, 22.8, 25.2, 28, 31.2, 2, 2);

-- ----------------------------
-- Table structure for bb_u
-- ----------------------------
DROP TABLE IF EXISTS `bb_u`;
CREATE TABLE `bb_u`  (
  `id_bb_u` int(11) NOT NULL AUTO_INCREMENT,
  `umur_bb_u` int(11) NULL DEFAULT NULL,
  `min_3_sd` float NULL DEFAULT NULL,
  `min_2_sd` float NULL DEFAULT NULL,
  `min_1_sd` float NULL DEFAULT NULL,
  `median` float NULL DEFAULT NULL,
  `plus_1_sd` float NULL DEFAULT NULL,
  `plus_2_sd` float NULL DEFAULT NULL,
  `plus_3_sd` float NULL DEFAULT NULL,
  `id_jk_bb_u` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id_bb_u`) USING BTREE,
  INDEX `id_jk_bb_u`(`id_jk_bb_u`) USING BTREE,
  CONSTRAINT `bb_u_ibfk_1` FOREIGN KEY (`id_jk_bb_u`) REFERENCES `jk` (`id_jk`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 197 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of bb_u
-- ----------------------------
INSERT INTO `bb_u` VALUES (75, 0, 2.1, 2.5, 2.9, 3.3, 3.9, 4.4, 5, 1);
INSERT INTO `bb_u` VALUES (76, 1, 2.9, 3.4, 3.9, 4.5, 5.1, 5.8, 6.6, 1);
INSERT INTO `bb_u` VALUES (77, 2, 3.8, 4.3, 4.9, 5.6, 6.3, 7.1, 8, 1);
INSERT INTO `bb_u` VALUES (78, 3, 4.4, 5, 5.7, 6.4, 7.2, 8, 9, 1);
INSERT INTO `bb_u` VALUES (79, 4, 4.9, 5.6, 6.2, 7, 7.8, 8.7, 9.7, 1);
INSERT INTO `bb_u` VALUES (80, 5, 5.3, 6, 6.7, 7.5, 8.4, 9.3, 10.4, 1);
INSERT INTO `bb_u` VALUES (81, 6, 5.7, 6.4, 7.1, 7.9, 8.8, 9.8, 10.9, 1);
INSERT INTO `bb_u` VALUES (82, 7, 5.9, 6.7, 7.4, 8.3, 9.2, 10.3, 11.4, 1);
INSERT INTO `bb_u` VALUES (83, 8, 6.2, 6.9, 7.7, 8.6, 9.6, 10.7, 11.9, 1);
INSERT INTO `bb_u` VALUES (84, 9, 6.4, 7.1, 8, 8.9, 9.9, 11, 12.3, 1);
INSERT INTO `bb_u` VALUES (85, 10, 6.6, 7.4, 8.2, 9.2, 10.2, 11.4, 12.7, 1);
INSERT INTO `bb_u` VALUES (86, 11, 6.8, 7.6, 8.4, 9.4, 10.5, 11.7, 13, 1);
INSERT INTO `bb_u` VALUES (87, 12, 6.9, 7.7, 8.6, 9.6, 10.8, 12, 13.3, 1);
INSERT INTO `bb_u` VALUES (88, 13, 7.1, 7.9, 8.8, 9.9, 11, 12.3, 13.7, 1);
INSERT INTO `bb_u` VALUES (89, 14, 7.2, 8.1, 9, 10.1, 11.3, 12.6, 14, 1);
INSERT INTO `bb_u` VALUES (90, 15, 7.4, 8.3, 9.2, 10.3, 11.5, 12.8, 14.3, 1);
INSERT INTO `bb_u` VALUES (91, 16, 7.5, 8.4, 9.4, 10.5, 11.7, 13.1, 14.6, 1);
INSERT INTO `bb_u` VALUES (92, 17, 7.7, 8.6, 9.6, 10.7, 12, 13.4, 14.9, 1);
INSERT INTO `bb_u` VALUES (93, 18, 7.8, 8.8, 9.8, 10.9, 12.2, 13.7, 15.3, 1);
INSERT INTO `bb_u` VALUES (94, 19, 8, 8.9, 10, 11.1, 12.5, 13.9, 15.6, 1);
INSERT INTO `bb_u` VALUES (95, 20, 8.1, 9.1, 10.1, 11.3, 12.7, 14.2, 15.9, 1);
INSERT INTO `bb_u` VALUES (96, 21, 8.2, 9.2, 10.3, 11.5, 12.9, 14.5, 16.2, 1);
INSERT INTO `bb_u` VALUES (97, 22, 8.4, 9.4, 10.5, 11.8, 13.2, 14.7, 16.5, 1);
INSERT INTO `bb_u` VALUES (98, 23, 8.5, 9.5, 10.7, 12, 13.4, 15, 16.8, 1);
INSERT INTO `bb_u` VALUES (99, 24, 8.6, 9.7, 10.8, 12.2, 13.6, 15.3, 17.1, 1);
INSERT INTO `bb_u` VALUES (100, 25, 8.8, 9.8, 11, 12.4, 13.9, 15.5, 17.5, 1);
INSERT INTO `bb_u` VALUES (101, 26, 8.9, 10, 11.2, 12.5, 14.1, 15.8, 17.8, 1);
INSERT INTO `bb_u` VALUES (102, 27, 9, 10.1, 11.3, 12.7, 14.3, 16.1, 18.1, 1);
INSERT INTO `bb_u` VALUES (103, 28, 9.1, 10.2, 11.5, 12.9, 14.5, 16.3, 18.4, 1);
INSERT INTO `bb_u` VALUES (104, 29, 9.2, 10.4, 11.7, 13.1, 14.8, 16.6, 18.7, 1);
INSERT INTO `bb_u` VALUES (105, 30, 9.4, 10.5, 11.8, 13.3, 15, 16.9, 19, 1);
INSERT INTO `bb_u` VALUES (106, 31, 9.5, 10.7, 12, 13.5, 15.2, 17.1, 19.3, 1);
INSERT INTO `bb_u` VALUES (107, 32, 9.6, 10.8, 12.1, 13.7, 15.4, 17.4, 19.6, 1);
INSERT INTO `bb_u` VALUES (108, 33, 9.7, 10.9, 12.3, 13.8, 15.6, 17.6, 19.9, 1);
INSERT INTO `bb_u` VALUES (109, 34, 9.8, 11, 12.4, 14, 15.8, 17.8, 20.2, 1);
INSERT INTO `bb_u` VALUES (110, 35, 9.9, 11.2, 12.6, 14.2, 16, 18.1, 20.4, 1);
INSERT INTO `bb_u` VALUES (111, 36, 10, 11.3, 12.7, 14.3, 16.2, 18.3, 20.7, 1);
INSERT INTO `bb_u` VALUES (112, 37, 10.1, 11.4, 12.9, 14.5, 16.4, 18.6, 21, 1);
INSERT INTO `bb_u` VALUES (113, 38, 10.2, 11.5, 13, 14.7, 16.6, 18.8, 21.3, 1);
INSERT INTO `bb_u` VALUES (114, 39, 10.3, 11.6, 13.1, 14.8, 16.8, 19, 21.6, 1);
INSERT INTO `bb_u` VALUES (115, 40, 10.4, 11.8, 13.3, 15, 17, 19.3, 21.9, 1);
INSERT INTO `bb_u` VALUES (116, 41, 10.5, 11.9, 13.4, 15.2, 17.2, 19.5, 22.1, 1);
INSERT INTO `bb_u` VALUES (117, 42, 10.6, 12, 13.6, 15.3, 17.4, 19.7, 22.4, 1);
INSERT INTO `bb_u` VALUES (118, 43, 10.7, 12.1, 13.7, 15.5, 17.6, 20, 22.7, 1);
INSERT INTO `bb_u` VALUES (119, 44, 10.8, 12.2, 13.8, 15.7, 17.8, 20.2, 23, 1);
INSERT INTO `bb_u` VALUES (120, 45, 10.9, 12.4, 14, 15.8, 18, 20.5, 23.3, 1);
INSERT INTO `bb_u` VALUES (121, 46, 11, 12.5, 14.1, 16, 18.2, 20.7, 23.6, 1);
INSERT INTO `bb_u` VALUES (122, 47, 11.1, 12.6, 14.3, 16.2, 18.4, 20.9, 23.9, 1);
INSERT INTO `bb_u` VALUES (123, 48, 11.2, 12.7, 14.4, 16.3, 18.6, 21.2, 24.2, 1);
INSERT INTO `bb_u` VALUES (124, 49, 11.3, 12.8, 14.5, 16.5, 18.8, 21.4, 24.5, 1);
INSERT INTO `bb_u` VALUES (125, 50, 11.4, 12.9, 14.7, 16.7, 19, 21.7, 24.8, 1);
INSERT INTO `bb_u` VALUES (126, 51, 11.5, 13.1, 14.8, 16.8, 19.2, 21.9, 25.1, 1);
INSERT INTO `bb_u` VALUES (127, 52, 11.6, 13.2, 15, 17, 19.4, 22.2, 25.4, 1);
INSERT INTO `bb_u` VALUES (128, 53, 11.7, 13.3, 15.1, 17.2, 19.6, 22.4, 25.7, 1);
INSERT INTO `bb_u` VALUES (129, 54, 11.8, 13.4, 15.2, 17.3, 19.8, 22.7, 26, 1);
INSERT INTO `bb_u` VALUES (130, 55, 11.9, 13.5, 15.4, 17.5, 20, 22.9, 26.3, 1);
INSERT INTO `bb_u` VALUES (131, 56, 12, 13.6, 15.5, 17.7, 20.2, 23.2, 26.6, 1);
INSERT INTO `bb_u` VALUES (132, 57, 12.1, 13.7, 15.6, 17.8, 20.4, 23.4, 26.9, 1);
INSERT INTO `bb_u` VALUES (133, 58, 12.2, 13.8, 15.8, 18, 20.6, 23.7, 27.2, 1);
INSERT INTO `bb_u` VALUES (134, 59, 12.3, 14, 15.9, 18.2, 20.8, 23.9, 27.6, 1);
INSERT INTO `bb_u` VALUES (135, 60, 12.4, 14.1, 16, 18.3, 21, 24.2, 27.9, 1);
INSERT INTO `bb_u` VALUES (136, 0, 2, 2.4, 2.8, 3.2, 3.7, 4.2, 4.8, 2);
INSERT INTO `bb_u` VALUES (137, 1, 2.7, 3.2, 3.6, 4.2, 4.8, 5.5, 6.2, 2);
INSERT INTO `bb_u` VALUES (138, 2, 3.4, 3.9, 4.5, 5.1, 5.8, 6.6, 7.5, 2);
INSERT INTO `bb_u` VALUES (139, 3, 4, 4.5, 5.2, 5.8, 6.6, 7.5, 8.5, 2);
INSERT INTO `bb_u` VALUES (140, 4, 4.4, 5, 5.7, 6.4, 7.3, 8.2, 9.3, 2);
INSERT INTO `bb_u` VALUES (141, 5, 4.8, 5.4, 6.1, 6.9, 7.8, 8.8, 10, 2);
INSERT INTO `bb_u` VALUES (142, 6, 5.1, 5.7, 6.5, 7.3, 8.2, 9.3, 10.6, 2);
INSERT INTO `bb_u` VALUES (143, 7, 5.3, 6, 6.8, 7.6, 8.6, 9.8, 11.1, 2);
INSERT INTO `bb_u` VALUES (144, 8, 5.6, 6.3, 7, 7.9, 9, 10.2, 11.6, 2);
INSERT INTO `bb_u` VALUES (145, 9, 5.8, 6.5, 7.3, 8.2, 9.3, 10.5, 12, 2);
INSERT INTO `bb_u` VALUES (146, 10, 5.9, 6.7, 7.5, 8.5, 9.6, 10.9, 12.4, 2);
INSERT INTO `bb_u` VALUES (147, 11, 6.1, 6.9, 7.7, 8.7, 9.9, 11.2, 12.8, 2);
INSERT INTO `bb_u` VALUES (148, 12, 6.3, 7, 7.9, 8.9, 10.1, 11.5, 13.1, 2);
INSERT INTO `bb_u` VALUES (149, 13, 6.4, 7.2, 8.1, 9.2, 10.4, 11.8, 13.5, 2);
INSERT INTO `bb_u` VALUES (150, 14, 6.6, 7.4, 8.3, 9.4, 10.6, 12.1, 13.8, 2);
INSERT INTO `bb_u` VALUES (151, 15, 6.7, 7.6, 8.5, 9.6, 10.9, 12.4, 14.1, 2);
INSERT INTO `bb_u` VALUES (152, 16, 6.9, 7.7, 8.7, 9.8, 11.1, 12.6, 14.5, 2);
INSERT INTO `bb_u` VALUES (153, 17, 7, 7.9, 8.9, 10, 11.4, 12.9, 14.8, 2);
INSERT INTO `bb_u` VALUES (154, 18, 7.2, 8.1, 9.1, 10.2, 11.6, 13.2, 15.1, 2);
INSERT INTO `bb_u` VALUES (155, 19, 7.3, 8.2, 9.2, 10.4, 11.8, 13.5, 15.4, 2);
INSERT INTO `bb_u` VALUES (156, 20, 7.5, 8.4, 9.4, 10.6, 12.1, 13.7, 15.7, 2);
INSERT INTO `bb_u` VALUES (157, 21, 7.6, 8.6, 9.6, 10.9, 12.3, 14, 16, 2);
INSERT INTO `bb_u` VALUES (158, 22, 7.8, 8.7, 9.8, 11.1, 12.5, 14.3, 16.4, 2);
INSERT INTO `bb_u` VALUES (159, 23, 7.9, 8.9, 10, 11.3, 12.8, 14.6, 16.7, 2);
INSERT INTO `bb_u` VALUES (160, 24, 8.1, 9, 10.2, 11.5, 13, 14.8, 17, 2);
INSERT INTO `bb_u` VALUES (161, 25, 8.2, 9.2, 10.3, 11.7, 13.3, 15.1, 17.3, 2);
INSERT INTO `bb_u` VALUES (162, 26, 8.4, 9.4, 10.5, 11.9, 13.5, 15.4, 17.7, 2);
INSERT INTO `bb_u` VALUES (163, 27, 8.5, 9.5, 10.7, 12.1, 13.7, 15.7, 18, 2);
INSERT INTO `bb_u` VALUES (164, 28, 8.6, 9.7, 10.9, 12.3, 14, 16, 18.3, 2);
INSERT INTO `bb_u` VALUES (165, 29, 8.8, 9.8, 11.1, 12.5, 14.2, 16.2, 18.7, 2);
INSERT INTO `bb_u` VALUES (166, 30, 8.9, 10, 11.2, 12.7, 14.4, 16.5, 19, 2);
INSERT INTO `bb_u` VALUES (167, 31, 9, 10.1, 11.4, 12.9, 14.7, 16.8, 19.3, 2);
INSERT INTO `bb_u` VALUES (168, 32, 9.1, 10.3, 11.6, 13.1, 14.9, 17.1, 19.6, 2);
INSERT INTO `bb_u` VALUES (169, 33, 9.3, 10.4, 11.7, 13.3, 15.1, 17.3, 20, 2);
INSERT INTO `bb_u` VALUES (170, 34, 9.4, 10.5, 11.9, 13.5, 15.4, 17.6, 20.3, 2);
INSERT INTO `bb_u` VALUES (171, 35, 9.5, 10.7, 12, 13.7, 15.6, 17.9, 20.6, 2);
INSERT INTO `bb_u` VALUES (172, 36, 9.6, 10.8, 12.2, 13.9, 15.8, 18.1, 20.9, 2);
INSERT INTO `bb_u` VALUES (173, 37, 9.7, 10.9, 12.4, 14, 16, 18.4, 21.3, 2);
INSERT INTO `bb_u` VALUES (174, 38, 9.8, 11.1, 12.5, 14.2, 16.3, 18.7, 21.6, 2);
INSERT INTO `bb_u` VALUES (175, 39, 9.9, 11.2, 12.7, 14.4, 16.5, 19, 22, 2);
INSERT INTO `bb_u` VALUES (176, 40, 10.1, 11.3, 12.8, 14.6, 16.7, 19.2, 22.3, 2);
INSERT INTO `bb_u` VALUES (177, 41, 10.2, 11.5, 13, 14.8, 16.9, 19.5, 22.7, 2);
INSERT INTO `bb_u` VALUES (178, 42, 10.3, 11.6, 13.1, 15, 17.2, 19.8, 23, 2);
INSERT INTO `bb_u` VALUES (179, 43, 10.4, 11.7, 13.3, 15.2, 17.4, 20.1, 23.4, 2);
INSERT INTO `bb_u` VALUES (180, 44, 10.5, 11.8, 13.4, 15.3, 17.6, 20.4, 23.7, 2);
INSERT INTO `bb_u` VALUES (181, 45, 10.6, 12, 13.6, 15.5, 17.8, 20.7, 24.1, 2);
INSERT INTO `bb_u` VALUES (182, 46, 10.7, 12.1, 13.7, 15.7, 18.1, 20.9, 24.5, 2);
INSERT INTO `bb_u` VALUES (183, 47, 10.8, 12.2, 13.9, 15.9, 18.3, 21.2, 24.8, 2);
INSERT INTO `bb_u` VALUES (184, 48, 10.9, 12.3, 14, 16.1, 18.5, 21.5, 25.2, 2);
INSERT INTO `bb_u` VALUES (185, 49, 11, 12.4, 14.2, 16.3, 18.8, 21.8, 25.5, 2);
INSERT INTO `bb_u` VALUES (186, 50, 11.1, 12.6, 14.3, 16.4, 19, 22.1, 25.9, 2);
INSERT INTO `bb_u` VALUES (187, 51, 11.2, 12.7, 14.5, 16.6, 19.2, 22.4, 26.3, 2);
INSERT INTO `bb_u` VALUES (188, 52, 11.3, 12.8, 14.6, 16.8, 19.4, 22.6, 26.6, 2);
INSERT INTO `bb_u` VALUES (189, 53, 11.4, 12.9, 14.8, 17, 19.7, 22.9, 27, 2);
INSERT INTO `bb_u` VALUES (190, 54, 11.5, 13, 14.9, 17.2, 19.9, 23.2, 27.4, 2);
INSERT INTO `bb_u` VALUES (191, 55, 11.6, 13.2, 15.1, 17.3, 20.1, 23.5, 27.7, 2);
INSERT INTO `bb_u` VALUES (192, 56, 11.7, 13.3, 15.2, 17.5, 20.3, 23.8, 28.1, 2);
INSERT INTO `bb_u` VALUES (193, 57, 11.8, 13.4, 15.3, 17.7, 20.6, 24.1, 28.5, 2);
INSERT INTO `bb_u` VALUES (194, 58, 11.9, 13.5, 15.5, 17.9, 20.8, 24.4, 28.8, 2);
INSERT INTO `bb_u` VALUES (195, 59, 12, 13.6, 15.6, 18, 21, 24.6, 29.2, 2);
INSERT INTO `bb_u` VALUES (196, 60, 12.1, 13.7, 15.8, 18.2, 21.2, 24.9, 29.5, 2);

-- ----------------------------
-- Table structure for data
-- ----------------------------
DROP TABLE IF EXISTS `data`;
CREATE TABLE `data`  (
  `id_data` int(11) NOT NULL AUTO_INCREMENT,
  `id_balita` int(11) NULL DEFAULT NULL,
  `umur` float NULL DEFAULT NULL,
  `tinggi` float NULL DEFAULT NULL,
  `berat` float NULL DEFAULT NULL,
  `tanggal` date NULL DEFAULT NULL,
  PRIMARY KEY (`id_data`) USING BTREE,
  INDEX `id_balita`(`id_balita`) USING BTREE,
  CONSTRAINT `data_ibfk_1` FOREIGN KEY (`id_balita`) REFERENCES `balita` (`id_balita`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 10 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of data
-- ----------------------------
INSERT INTO `data` VALUES (5, 6, 24, 53, 24, '2022-12-17');
INSERT INTO `data` VALUES (9, 6, 23, 55, 34, '2022-12-11');

-- ----------------------------
-- Table structure for hasil
-- ----------------------------
DROP TABLE IF EXISTS `hasil`;
CREATE TABLE `hasil`  (
  `id_hasil` int(11) NOT NULL AUTO_INCREMENT,
  `id_balita` int(11) NULL DEFAULT NULL,
  `status_bb_u` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `status_pb_u` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `status_bb_pb` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `id_data` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id_hasil`) USING BTREE,
  INDEX `id_balita`(`id_balita`) USING BTREE,
  INDEX `id_data`(`id_data`) USING BTREE,
  CONSTRAINT `hasil_ibfk_1` FOREIGN KEY (`id_balita`) REFERENCES `balita` (`id_balita`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `hasil_ibfk_2` FOREIGN KEY (`id_data`) REFERENCES `data` (`id_data`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of hasil
-- ----------------------------
INSERT INTO `hasil` VALUES (6, 6, 'Berat Badan Berlebih', 'Sangat Pendek', 'Berisiko Gizi Lebih', 5);
INSERT INTO `hasil` VALUES (7, 6, 'Berat Badan Berlebih', 'Sangat Pendek', 'Berisiko Gizi Lebih', 9);

-- ----------------------------
-- Table structure for jk
-- ----------------------------
DROP TABLE IF EXISTS `jk`;
CREATE TABLE `jk`  (
  `id_jk` int(11) NOT NULL AUTO_INCREMENT,
  `jk` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_jk`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of jk
-- ----------------------------
INSERT INTO `jk` VALUES (1, 'Laki-Laki');
INSERT INTO `jk` VALUES (2, 'Perempuan');

-- ----------------------------
-- Table structure for ortu
-- ----------------------------
DROP TABLE IF EXISTS `ortu`;
CREATE TABLE `ortu`  (
  `id_ortu` int(11) NOT NULL AUTO_INCREMENT,
  `nama_ortu` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `id_jk_ortu` int(1) NULL DEFAULT NULL,
  `alamat` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `pekerjaan` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `no_telpon` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_ortu`) USING BTREE,
  INDEX `id_jk_ortu`(`id_jk_ortu`) USING BTREE,
  CONSTRAINT `ortu_ibfk_1` FOREIGN KEY (`id_jk_ortu`) REFERENCES `jk` (`id_jk`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of ortu
-- ----------------------------
INSERT INTO `ortu` VALUES (3, 'asd', 1, NULL, NULL, NULL);
INSERT INTO `ortu` VALUES (4, 'ulan', 2, NULL, NULL, NULL);
INSERT INTO `ortu` VALUES (5, 'usup', 2, NULL, NULL, NULL);
INSERT INTO `ortu` VALUES (7, 'kuya', 1, 'cilep', 'tidur', '08889881290888');

-- ----------------------------
-- Table structure for pb_u
-- ----------------------------
DROP TABLE IF EXISTS `pb_u`;
CREATE TABLE `pb_u`  (
  `id_pb_u` int(11) NOT NULL AUTO_INCREMENT,
  `umur_pb_u` int(11) NULL DEFAULT NULL,
  `min_3_sd` float NULL DEFAULT NULL,
  `min_2_sd` float NULL DEFAULT NULL,
  `min_1_sd` float NULL DEFAULT NULL,
  `median` float NULL DEFAULT NULL,
  `plus_1_sd` float NULL DEFAULT NULL,
  `plus_2_sd` float NULL DEFAULT NULL,
  `plus_3_sd` float NULL DEFAULT NULL,
  `id_jk_pb_u` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id_pb_u`) USING BTREE,
  INDEX `id_jk_pb_u`(`id_jk_pb_u`) USING BTREE,
  CONSTRAINT `pb_u_ibfk_1` FOREIGN KEY (`id_jk_pb_u`) REFERENCES `jk` (`id_jk`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 123 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of pb_u
-- ----------------------------
INSERT INTO `pb_u` VALUES (1, 0, 44.2, 46.1, 48, 49.9, 51.8, 53.7, 55.6, 1);
INSERT INTO `pb_u` VALUES (2, 1, 48.9, 50.8, 52.8, 54.7, 56.7, 58.6, 60.6, 1);
INSERT INTO `pb_u` VALUES (3, 2, 52.4, 54.4, 56.4, 58.4, 60.4, 62.4, 64.4, 1);
INSERT INTO `pb_u` VALUES (4, 3, 55.3, 57.3, 59.4, 61.4, 63.5, 65.5, 67.6, 1);
INSERT INTO `pb_u` VALUES (5, 4, 57.6, 59.7, 61.8, 63.9, 66, 68, 70.1, 1);
INSERT INTO `pb_u` VALUES (6, 5, 59.6, 61.7, 63.8, 65.9, 68, 70.1, 72.2, 1);
INSERT INTO `pb_u` VALUES (7, 6, 61.2, 63.3, 65.5, 67.6, 69.8, 71.9, 74, 1);
INSERT INTO `pb_u` VALUES (8, 7, 62.7, 64.8, 67, 69.2, 71.3, 73.5, 75.7, 1);
INSERT INTO `pb_u` VALUES (9, 8, 64, 66.2, 68.4, 70.6, 72.8, 75, 77.2, 1);
INSERT INTO `pb_u` VALUES (10, 9, 65.2, 67.5, 69.7, 72, 74.2, 76.5, 78.7, 1);
INSERT INTO `pb_u` VALUES (11, 10, 66.4, 68.7, 71, 73.3, 75.6, 77.9, 80.1, 1);
INSERT INTO `pb_u` VALUES (12, 11, 67.6, 69.9, 72.2, 74.5, 76.9, 79.2, 81.5, 1);
INSERT INTO `pb_u` VALUES (13, 12, 68.6, 71, 73.4, 75.7, 78.1, 80.5, 82.9, 1);
INSERT INTO `pb_u` VALUES (14, 13, 69.6, 72.1, 74.5, 76.9, 79.3, 81.8, 84.2, 1);
INSERT INTO `pb_u` VALUES (15, 14, 70.6, 73.1, 75.6, 78, 80.5, 83, 85.5, 1);
INSERT INTO `pb_u` VALUES (16, 15, 71.6, 74.1, 76.6, 79.1, 81.7, 84.2, 86.7, 1);
INSERT INTO `pb_u` VALUES (17, 16, 72.5, 75, 77.6, 80.2, 82.8, 85.4, 88, 1);
INSERT INTO `pb_u` VALUES (18, 17, 73.3, 76, 78.6, 81.2, 83.9, 86.5, 89.2, 1);
INSERT INTO `pb_u` VALUES (19, 18, 74.2, 76.9, 79.6, 82.3, 85, 87.7, 90.4, 1);
INSERT INTO `pb_u` VALUES (20, 19, 75, 77.7, 80.5, 83.2, 86, 88.8, 91.5, 1);
INSERT INTO `pb_u` VALUES (21, 20, 75.8, 78.6, 81.4, 84.2, 87, 89.8, 92.6, 1);
INSERT INTO `pb_u` VALUES (22, 21, 76.5, 79.4, 82.3, 85.1, 88, 90.9, 93.8, 1);
INSERT INTO `pb_u` VALUES (23, 22, 77.2, 80.2, 83.1, 86, 89, 91.9, 94.9, 1);
INSERT INTO `pb_u` VALUES (24, 23, 78, 81, 83.9, 86.9, 89.9, 92.9, 95.9, 1);
INSERT INTO `pb_u` VALUES (25, 24, 78, 81, 84.1, 87.1, 90.2, 93.2, 96.3, 1);
INSERT INTO `pb_u` VALUES (26, 25, 78.6, 81.7, 84.9, 88, 91.1, 94.2, 97.3, 1);
INSERT INTO `pb_u` VALUES (27, 26, 79.3, 82.5, 85.6, 88.8, 92, 95.2, 98.3, 1);
INSERT INTO `pb_u` VALUES (28, 27, 79.9, 83.1, 86.4, 89.6, 92.9, 96.1, 99.3, 1);
INSERT INTO `pb_u` VALUES (29, 28, 80.5, 83.8, 87.1, 90.4, 93.7, 97, 100.3, 1);
INSERT INTO `pb_u` VALUES (30, 29, 81.1, 84.5, 87.8, 91.2, 94.5, 97.9, 101.2, 1);
INSERT INTO `pb_u` VALUES (31, 30, 81.7, 85.1, 88.5, 91.9, 95.3, 98.7, 102.1, 1);
INSERT INTO `pb_u` VALUES (32, 31, 82.3, 85.7, 89.2, 92.7, 96.1, 99.6, 103, 1);
INSERT INTO `pb_u` VALUES (33, 32, 82.8, 86.4, 89.9, 93.4, 96.9, 100.4, 103.9, 1);
INSERT INTO `pb_u` VALUES (34, 33, 83.4, 86.9, 90.5, 94.1, 97.6, 101.2, 104.8, 1);
INSERT INTO `pb_u` VALUES (35, 34, 83.9, 87.5, 91.1, 94.8, 98.4, 102, 105.6, 1);
INSERT INTO `pb_u` VALUES (36, 35, 84.4, 88.1, 91.8, 95.4, 99.1, 102.7, 106.4, 1);
INSERT INTO `pb_u` VALUES (37, 36, 85, 88.7, 92.4, 96.1, 99.8, 103.5, 107.2, 1);
INSERT INTO `pb_u` VALUES (38, 37, 85.5, 89.2, 93, 96.7, 100.5, 104.2, 108, 1);
INSERT INTO `pb_u` VALUES (39, 38, 86, 89.8, 93.6, 97.4, 101.2, 105, 108.8, 1);
INSERT INTO `pb_u` VALUES (40, 39, 86.5, 90.3, 94.2, 98, 101.8, 105.7, 109.5, 1);
INSERT INTO `pb_u` VALUES (41, 40, 87, 90.9, 94.7, 98.6, 102.5, 106.4, 110.3, 1);
INSERT INTO `pb_u` VALUES (42, 41, 87.5, 91.4, 95.3, 99.2, 103.2, 107.1, 111, 1);
INSERT INTO `pb_u` VALUES (43, 42, 88, 91.9, 95.9, 99.9, 103.8, 107.8, 111.7, 1);
INSERT INTO `pb_u` VALUES (44, 43, 88.4, 92.4, 96.4, 100.4, 104.5, 108.5, 112.5, 1);
INSERT INTO `pb_u` VALUES (45, 44, 88.9, 93, 97, 101, 105.1, 109.1, 113.2, 1);
INSERT INTO `pb_u` VALUES (46, 45, 89.4, 93.5, 97.5, 101.6, 105.7, 109.8, 113.9, 1);
INSERT INTO `pb_u` VALUES (47, 46, 89.8, 94, 98.1, 102.2, 106.3, 110.4, 114.6, 1);
INSERT INTO `pb_u` VALUES (48, 47, 90.3, 94.4, 98.6, 102.8, 106.9, 111.1, 115.2, 1);
INSERT INTO `pb_u` VALUES (49, 48, 90.7, 94.9, 99.1, 103.3, 107.5, 111.7, 115.9, 1);
INSERT INTO `pb_u` VALUES (50, 49, 91.2, 95.4, 99.7, 103.9, 108.1, 112.4, 116.6, 1);
INSERT INTO `pb_u` VALUES (51, 50, 91.6, 95.9, 100.2, 104.4, 108.7, 113, 117.3, 1);
INSERT INTO `pb_u` VALUES (52, 51, 92.1, 96.4, 100.7, 105, 109.3, 113.6, 117.9, 1);
INSERT INTO `pb_u` VALUES (53, 52, 92.5, 96.9, 101.2, 105.6, 109.9, 114.2, 118.6, 1);
INSERT INTO `pb_u` VALUES (54, 53, 93, 97.4, 101.7, 106.1, 110.5, 114.9, 119.2, 1);
INSERT INTO `pb_u` VALUES (55, 54, 93.4, 97.8, 102.3, 106.7, 111.1, 115.5, 119.9, 1);
INSERT INTO `pb_u` VALUES (56, 55, 93.9, 98.3, 102.8, 107.2, 111.7, 116.1, 120.6, 1);
INSERT INTO `pb_u` VALUES (57, 56, 94.3, 98.8, 103.3, 107.8, 112.3, 116.7, 121.2, 1);
INSERT INTO `pb_u` VALUES (58, 57, 94.7, 99.3, 103.8, 108.3, 112.8, 117.4, 121.9, 1);
INSERT INTO `pb_u` VALUES (59, 58, 95.2, 99.7, 104.3, 108.9, 113.4, 118, 122.6, 1);
INSERT INTO `pb_u` VALUES (60, 59, 95.6, 100.2, 104.8, 109.4, 114, 118.6, 123.2, 1);
INSERT INTO `pb_u` VALUES (61, 60, 96.1, 100.7, 105.3, 110, 114.6, 119.2, 123.9, 1);
INSERT INTO `pb_u` VALUES (62, 0, 43.6, 45.4, 47.3, 49.1, 51, 52.9, 54.7, 2);
INSERT INTO `pb_u` VALUES (63, 1, 47.8, 49.8, 51.7, 53.7, 55.6, 57.6, 59.5, 2);
INSERT INTO `pb_u` VALUES (64, 2, 51, 53, 55, 57.1, 59.1, 61.1, 63.2, 2);
INSERT INTO `pb_u` VALUES (65, 3, 53.5, 55.6, 57.7, 59.8, 61.9, 64, 66.1, 2);
INSERT INTO `pb_u` VALUES (66, 4, 55.6, 57.8, 59.9, 62.1, 64.3, 66.4, 68.6, 2);
INSERT INTO `pb_u` VALUES (67, 5, 57.4, 59.6, 61.8, 64, 66.2, 68.5, 70.7, 2);
INSERT INTO `pb_u` VALUES (68, 6, 58.9, 61.2, 63.5, 65.7, 68, 70.3, 72.5, 2);
INSERT INTO `pb_u` VALUES (69, 7, 60.3, 62.7, 65, 67.3, 69.6, 71.9, 74.2, 2);
INSERT INTO `pb_u` VALUES (70, 8, 61.7, 64, 66.4, 68.7, 71.1, 73.5, 75.8, 2);
INSERT INTO `pb_u` VALUES (71, 9, 62.9, 65.3, 67.7, 70.1, 72.6, 75, 77.4, 2);
INSERT INTO `pb_u` VALUES (72, 10, 64.1, 66.5, 69, 71.5, 73.9, 76.4, 78.9, 2);
INSERT INTO `pb_u` VALUES (73, 11, 65.2, 67.7, 70.3, 72.8, 75.3, 77.8, 80.3, 2);
INSERT INTO `pb_u` VALUES (74, 12, 66.3, 68.9, 71.4, 74, 76.6, 79.2, 81.7, 2);
INSERT INTO `pb_u` VALUES (75, 13, 67.3, 70, 72.6, 75.2, 77.8, 80.5, 83.1, 2);
INSERT INTO `pb_u` VALUES (76, 14, 68.3, 71, 73.7, 76.4, 79.1, 81.7, 84.4, 2);
INSERT INTO `pb_u` VALUES (77, 15, 69.3, 72, 74.8, 77.5, 80.2, 83, 85.7, 2);
INSERT INTO `pb_u` VALUES (78, 16, 70.2, 73, 75.8, 78.6, 81.4, 84.2, 87, 2);
INSERT INTO `pb_u` VALUES (79, 17, 71.1, 74, 76.8, 79.7, 82.5, 85.4, 88.2, 2);
INSERT INTO `pb_u` VALUES (80, 18, 72, 74.9, 77.8, 80.7, 83.6, 86.5, 89.4, 2);
INSERT INTO `pb_u` VALUES (81, 19, 72.8, 75.8, 78.8, 81.7, 84.7, 87.6, 90.6, 2);
INSERT INTO `pb_u` VALUES (82, 20, 73.7, 76.7, 79.7, 82.7, 85.7, 88.7, 91.7, 2);
INSERT INTO `pb_u` VALUES (83, 21, 74.5, 77.5, 80.6, 83.7, 86.7, 89.8, 92.9, 2);
INSERT INTO `pb_u` VALUES (84, 22, 75.2, 78.4, 81.5, 84.6, 87.7, 90.8, 94, 2);
INSERT INTO `pb_u` VALUES (85, 23, 76, 79.2, 82.3, 85.5, 88.7, 91.9, 95, 2);
INSERT INTO `pb_u` VALUES (86, 24, 76, 79.3, 82.5, 85.7, 88.9, 92.2, 95.4, 2);
INSERT INTO `pb_u` VALUES (87, 25, 76.8, 80, 83.3, 86.6, 89.9, 93.1, 96.4, 2);
INSERT INTO `pb_u` VALUES (88, 26, 77.5, 80.8, 84.1, 87.4, 90.8, 94.1, 97.4, 2);
INSERT INTO `pb_u` VALUES (89, 27, 78.1, 81.5, 84.9, 88.3, 91.7, 95, 98.4, 2);
INSERT INTO `pb_u` VALUES (90, 28, 78.8, 82.2, 85.7, 89.1, 92.5, 96, 99.4, 2);
INSERT INTO `pb_u` VALUES (91, 29, 79.5, 82.9, 86.4, 89.9, 93.4, 96.9, 100.3, 2);
INSERT INTO `pb_u` VALUES (92, 30, 80.1, 83.6, 87.1, 90.7, 94.2, 97.7, 101.3, 2);
INSERT INTO `pb_u` VALUES (93, 31, 80.7, 84.3, 87.9, 91.4, 95, 98.6, 102.2, 2);
INSERT INTO `pb_u` VALUES (94, 32, 81.3, 84.9, 88.6, 92.2, 95.8, 99.4, 103.1, 2);
INSERT INTO `pb_u` VALUES (95, 33, 81.9, 85.6, 89.3, 92.9, 96.6, 100.3, 103.9, 2);
INSERT INTO `pb_u` VALUES (96, 34, 82.5, 86.2, 89.9, 93.6, 97.4, 101.1, 104.8, 2);
INSERT INTO `pb_u` VALUES (97, 35, 83.1, 86.8, 90.6, 94.4, 98.1, 101.9, 105.6, 2);
INSERT INTO `pb_u` VALUES (98, 36, 83.6, 87.4, 91.2, 95.1, 98.9, 102.7, 106.5, 2);
INSERT INTO `pb_u` VALUES (99, 37, 84.2, 88, 91.9, 95.7, 99.6, 103.4, 107.3, 2);
INSERT INTO `pb_u` VALUES (100, 38, 84.7, 88.6, 92.5, 96.4, 100.3, 104.2, 108.1, 2);
INSERT INTO `pb_u` VALUES (101, 39, 85.3, 89.2, 93.1, 97.1, 101, 105, 108.9, 2);
INSERT INTO `pb_u` VALUES (102, 40, 85.8, 89.8, 93.8, 97.7, 101.7, 105.7, 109.7, 2);
INSERT INTO `pb_u` VALUES (103, 41, 86.3, 90.4, 94.4, 98.4, 102.4, 106.4, 110.5, 2);
INSERT INTO `pb_u` VALUES (104, 42, 86.8, 90.9, 95, 99, 103.1, 107.2, 111.2, 2);
INSERT INTO `pb_u` VALUES (105, 43, 87.4, 91.5, 95.6, 99.7, 103.8, 107.9, 112, 2);
INSERT INTO `pb_u` VALUES (106, 44, 87.9, 92, 96.2, 100.3, 104.5, 108.6, 112.7, 2);
INSERT INTO `pb_u` VALUES (107, 45, 88.4, 92.5, 96.7, 100.9, 105.1, 109.3, 113.5, 2);
INSERT INTO `pb_u` VALUES (108, 46, 88.9, 93.1, 97.3, 101.5, 105.8, 110, 114.2, 2);
INSERT INTO `pb_u` VALUES (109, 47, 89.3, 93.6, 97.9, 102.1, 106.4, 110.7, 114.9, 2);
INSERT INTO `pb_u` VALUES (110, 48, 89.8, 94.1, 98.4, 102.7, 107, 111.3, 115.7, 2);
INSERT INTO `pb_u` VALUES (111, 49, 90.3, 94.6, 99, 103.3, 107.7, 112, 116.4, 2);
INSERT INTO `pb_u` VALUES (112, 50, 90.7, 95.1, 99.5, 103.9, 108.3, 112.7, 117.1, 2);
INSERT INTO `pb_u` VALUES (113, 51, 91.2, 95.6, 100.1, 104.5, 108.9, 113.3, 117.7, 2);
INSERT INTO `pb_u` VALUES (114, 52, 91.7, 96.1, 100.6, 105, 109.5, 114, 118.4, 2);
INSERT INTO `pb_u` VALUES (115, 53, 92.1, 96.6, 101.1, 105.6, 110.1, 114.6, 119.1, 2);
INSERT INTO `pb_u` VALUES (116, 54, 92.6, 97.1, 101.6, 106.2, 110.7, 115.2, 119.8, 2);
INSERT INTO `pb_u` VALUES (117, 55, 93, 97.6, 102.2, 106.7, 111.3, 115.9, 120.4, 2);
INSERT INTO `pb_u` VALUES (118, 56, 93.4, 98.1, 102.7, 107.3, 111.9, 116.5, 121.1, 2);
INSERT INTO `pb_u` VALUES (119, 57, 93.9, 98.5, 103.2, 107.8, 112.5, 117.1, 121.8, 2);
INSERT INTO `pb_u` VALUES (120, 58, 94.3, 99, 103.7, 108.4, 113, 117.7, 122.4, 2);
INSERT INTO `pb_u` VALUES (121, 59, 94.7, 99.5, 104.2, 108.9, 113.6, 118.3, 123.1, 2);
INSERT INTO `pb_u` VALUES (122, 60, 95.2, 99.9, 104.7, 109.4, 114.2, 118.9, 123.7, 2);

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user`  (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `username` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_user`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES (1, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3');

SET FOREIGN_KEY_CHECKS = 1;
