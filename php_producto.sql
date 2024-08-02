/*
 Navicat Premium Data Transfer

 Source Server         : local
 Source Server Type    : MySQL
 Source Server Version : 100424
 Source Host           : localhost:3306
 Source Schema         : php_producto

 Target Server Type    : MySQL
 Target Server Version : 100424
 File Encoding         : 65001

 Date: 01/08/2024 19:09:20
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for productos
-- ----------------------------
DROP TABLE IF EXISTS `productos`;
CREATE TABLE `productos`  (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `codigo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `imagen` varchar(600) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nombre` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `marca` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tipo` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `grupo` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `peso` decimal(8, 3) NOT NULL,
  `precio_unidad` decimal(8, 3) NOT NULL,
  `stock` int NOT NULL,
  `status` int NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `UNIQUE_productos_codigo`(`codigo`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 22 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of productos
-- ----------------------------
INSERT INTO `productos` VALUES (1, 'AET78U9', 'https://http2.mlstatic.com/D_NQ_NP_792586-MLA47682120282_092021-O.webp', 'Agua de Mesa sin Gas Nestlé Bidón 6.3L', 'Nestlé', 'Bebidas', 'Agua', 6.300, 195.600, 500, 1);
INSERT INTO `productos` VALUES (2, 'UI7R8O9', 'https://http2.mlstatic.com/D_NQ_NP_916232-MLA43940685535_102020-V.webp', 'Vino blanco Cuesta Del Madero 750 cc.', 'Cuesta del Madero', 'Bebidas', 'Vinos', 0.750, 187.750, 200, 1);
INSERT INTO `productos` VALUES (3, 'YUT2563', 'https://ardiaprod.vteximg.com.br/arquivos/ids/189380-1000-1000/Gaseosa-Cola-Cunnington-225-Lts-_1.jpg?v=637443308163370000', 'Gaseosa cola Cunnington 2.25L', 'Cunnington', 'Bebidas', 'Gaseosas', 2.250, 90.000, 300, 1);
INSERT INTO `productos` VALUES (4, 'YUT2564', 'https://http2.mlstatic.com/D_NQ_NP_864108-MLA45225461317_032021-O.webp', 'Gaseosa Coca Cola sabor original 1.25L', 'Coca cola', 'Bebidas', 'Gaseosas', 1.250, 108.700, 300, 1);
INSERT INTO `productos` VALUES (5, 'COPR8O6', 'https://d3ugyf2ht6aenh.cloudfront.net/stores/861/458/products/tapa-de-asado1-5eb3e89c1d76286a6815702030218736-480-0.jpg', 'Tapa de Asado de Novillo x kg', 'Genérico', 'Carnes y Pescados', 'Carne Vacuna', 1.000, 649.000, 100, 1);
INSERT INTO `productos` VALUES (6, 'HJ8R2O6', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcStBsCXkqHLdoSWfJ-E14u-UZHOrOSOBXLEQw&s', 'Medallón de pollo rebozado crocante 400 g. x 4 uni', 'Genérico', 'Carnes y Pescados', 'Pollo y Granja', 0.400, 369.000, 100, 1);
INSERT INTO `productos` VALUES (7, 'KJ8R2O3', 'https://calisa.com.ar/wp-content/uploads/2020/03/pollo_con_menudos.png', 'Pollo entero congelado x kg.', 'Genérico', 'Carnes y Pescados', 'Pollo y Granja', 1.000, 174.000, 300, 1);
INSERT INTO `productos` VALUES (8, 'JJ5R333', 'https://wongfood.vtexassets.com/arquivos/ids/703648/982554-1.jpg?v=638502876396600000', 'Cordero entero x kg.', 'Genérico', 'Carnes y Pescados', 'Pollo y Granja', 1.000, 829.900, 100, 1);
INSERT INTO `productos` VALUES (9, 'KLIO837', 'https://ardiaprod.vteximg.com.br/arquivos/ids/186555-1000-1000/Bocaditos-de-Pollo--Swift-380-Gr-_1.jpg?v=637427588306630000', 'Bocaditos de Pollo Swift 380g', 'Swift', 'Congelados', 'Nuggets y Rebozados', 0.380, 224.710, 250, 1);
INSERT INTO `productos` VALUES (10, 'KLK1832', 'https://www.lacoopeencasa.coop/media/lcec/publico/articulos/b/c/b/bcb1ebba13a23a558261bdc0cb983236', 'Medallón de carne Swift receta especial reducido en grasas 4 u.', 'Swift', 'Congelados', 'Hamburguesas', 0.320, 419.100, 200, 1);
INSERT INTO `productos` VALUES (11, 'DJK7365', 'https://walmartar.vteximg.com.br/arquivos/ids/909547-292-292/Helado-Frigor-Dulce-De-Leche-Frutilla-Chocolate-1-Kg-1-484640.jpg?v=637715616644530000', 'Helado Frigor dulce de leche vainilla chocolate balde 1 kg.', 'Frigor', 'Congelados', 'Helados', 1.000, 850.000, 100, 1);
INSERT INTO `productos` VALUES (12, 'DJK7366', 'https://arcorencasa.com/wp-content/uploads/2024/03/20240325-12190.jpg', 'Postre helado Bon O Bon dulce de leche, americana y chocolate 637 g.', 'Bon o Bon', 'Congelados', 'Helados', 0.637, 529.500, 100, 1);
INSERT INTO `productos` VALUES (13, 'LL8JI9D', 'https://jumboargentina.vtexassets.com/arquivos/ids/641230-1200-auto?v=637557810525130000&width=1200&height=auto&aspect=true', 'Leche Entera Larga Vida Apóstoles 1L', 'Apóstoles', 'Lácteos y Productos Frescos', 'Leches', 1.000, 67.150, 500, 1);
INSERT INTO `productos` VALUES (14, 'LL8JI10', 'https://carrefourar.vtexassets.com/arquivos/ids/204565/7794710010406_02.jpg?v=637592985140930000', 'Leche Entera uat Larclas tetra 1L', 'Larclas', 'Lácteos y Productos Frescos', 'Leches', 1.000, 70.850, 500, 1);
INSERT INTO `productos` VALUES (15, 'HJA2234', 'https://carrefourar.vtexassets.com/arquivos/ids/253374/7798321151091_01.jpg?v=637955629715270000', 'Yogur bebible entero Sancor yogs mult. vainilla 1 l.', 'Sancor', 'Lácteos y Productos Frescos', 'Yogures', 1.000, 226.800, 300, 1);
INSERT INTO `productos` VALUES (16, 'HJA2235', 'https://jumboargentina.vtexassets.com/arquivos/ids/714841-800-600?v=637959153792230000&width=800&height=600&aspect=true', 'Yogur bebible entero Sancor yogs mult. frutilla 1 l.', 'Sancor', 'Lácteos y Productos Frescos', 'Yogures', 1.000, 230.800, 300, 1);
INSERT INTO `productos` VALUES (17, 'GHT7729', 'https://http2.mlstatic.com/D_NQ_NP_999322-MLA46496226700_062021-O.webp', 'Mandarina Nova Huella Natural', 'Huella Natural', 'Frutas y Verduras', 'Frutas', 1.000, 70.850, 300, 1);
INSERT INTO `productos` VALUES (18, 'GHJ7711', 'https://http2.mlstatic.com/D_NQ_NP_914650-MLA31037009580_062019-O.webp', 'Cebolla x kg', 'Genérico', 'Frutas y Verduras', 'Verduras', 1.000, 48.000, 300, 1);
INSERT INTO `productos` VALUES (19, 'LLL7465', 'https://http2.mlstatic.com/D_NQ_NP_678730-MLA47346843510_092021-O.webp', 'Melon amarillo Huella Natural x kg.', 'Huella Natural', 'Frutas y Verduras', 'Frutas', 1.000, 140.000, 200, 1);
INSERT INTO `productos` VALUES (20, 'EEE8277', 'https://media.justo.mx/__sized__/products/12637-0-thumbnail-255x255-70.jpg', 'Manzana roja x kg.', 'Genérico', 'Frutas y Verduras', 'Frutas', 1.000, 159.000, 100, NULL);

-- ----------------------------
-- Table structure for usuario
-- ----------------------------
DROP TABLE IF EXISTS `usuario`;
CREATE TABLE `usuario`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `usuario` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `contraseña` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `status` int NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of usuario
-- ----------------------------

-- ----------------------------
-- Table structure for ventas
-- ----------------------------
DROP TABLE IF EXISTS `ventas`;
CREATE TABLE `ventas`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_producto` int NULL DEFAULT NULL,
  `costo_venta` decimal(10, 0) NULL DEFAULT NULL,
  `fecha_compra` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of ventas
-- ----------------------------
INSERT INTO `ventas` VALUES (1, 18, 48, '0000-00-00 00:00:00');
INSERT INTO `ventas` VALUES (2, 18, 48, '0000-00-00 00:00:00');
INSERT INTO `ventas` VALUES (3, 18, 48, '0000-00-00 00:00:00');

SET FOREIGN_KEY_CHECKS = 1;
