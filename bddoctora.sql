-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-02-2020 a las 21:08:47
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bddoctora`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbcolposcopias`
--

CREATE TABLE `tbcolposcopias` (
  `colposcopia_id` int(11) NOT NULL,
  `paciente_id` int(11) NOT NULL,
  `colposcopia_fecha` date NOT NULL,
  `colposcopia_peso` int(11) NOT NULL,
  `colposcopia_talla` varchar(20) NOT NULL,
  `colposcopia_TA` varchar(20) NOT NULL,
  `colposcopia_tabaquismo` varchar(20) NOT NULL,
  `colposcopia_AHF` varchar(20) NOT NULL,
  `colposcopia_AGO` varchar(20) NOT NULL,
  `colposcopia_menarca` varchar(20) NOT NULL,
  `colposcopia_ritmo` varchar(20) NOT NULL,
  `colposcopia_IVSA` varchar(20) NOT NULL,
  `colposcopia_PS` varchar(20) NOT NULL,
  `colposcopia_total_PAP` varchar(20) NOT NULL,
  `colposcopia_FUPAP` varchar(20) NOT NULL,
  `colposcopia_MPF` varchar(20) NOT NULL,
  `colposcopia_gesta` varchar(20) NOT NULL,
  `colposcopia_para` varchar(20) NOT NULL,
  `colposcopia_cesaria` varchar(20) NOT NULL,
  `colposcopia_aborto` varchar(20) NOT NULL,
  `colposcopia_LUI` varchar(20) NOT NULL,
  `colposcopia_APP` varchar(20) NOT NULL,
  `colposcopia_EPE` varchar(20) NOT NULL,
  `colposcopia_FUP` varchar(20) NOT NULL,
  `colposcopia_FUR` varchar(20) NOT NULL,
  `colposcopia_ITS` varchar(20) NOT NULL,
  `colposcopia_tx_previo` varchar(20) NOT NULL,
  `colposcopia_sintomas_del_TGI` varchar(20) NOT NULL,
  `colposcopia_colposcopia` varchar(20) NOT NULL,
  `colposcopia_indice_reid` varchar(20) NOT NULL,
  `colposcopia_nivel_campion` varchar(20) NOT NULL,
  `colposcopia_extension_lineal` varchar(20) NOT NULL,
  `colposcopia_vagina_sana` varchar(20) NOT NULL,
  `colposcopia_vulva_sana` varchar(20) NOT NULL,
  `colposcopia_region_perianal_sana` varchar(20) NOT NULL,
  `colposcopia_impresion_colposcopica` varchar(20) NOT NULL,
  `colposcopia_observaciones` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbcolposcopias`
--

INSERT INTO `tbcolposcopias` (`colposcopia_id`, `paciente_id`, `colposcopia_fecha`, `colposcopia_peso`, `colposcopia_talla`, `colposcopia_TA`, `colposcopia_tabaquismo`, `colposcopia_AHF`, `colposcopia_AGO`, `colposcopia_menarca`, `colposcopia_ritmo`, `colposcopia_IVSA`, `colposcopia_PS`, `colposcopia_total_PAP`, `colposcopia_FUPAP`, `colposcopia_MPF`, `colposcopia_gesta`, `colposcopia_para`, `colposcopia_cesaria`, `colposcopia_aborto`, `colposcopia_LUI`, `colposcopia_APP`, `colposcopia_EPE`, `colposcopia_FUP`, `colposcopia_FUR`, `colposcopia_ITS`, `colposcopia_tx_previo`, `colposcopia_sintomas_del_TGI`, `colposcopia_colposcopia`, `colposcopia_indice_reid`, `colposcopia_nivel_campion`, `colposcopia_extension_lineal`, `colposcopia_vagina_sana`, `colposcopia_vulva_sana`, `colposcopia_region_perianal_sana`, `colposcopia_impresion_colposcopica`, `colposcopia_observaciones`) VALUES
(2, 2, '0000-00-00', 0, '', '', '', 'jllkjlk', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(5, 5, '2019-02-26', 87, '87', '87', '87', '7', '87', '87', 'h', 'j', 'kj', 'jk', 'jk', 'jk', 'j', 'jk', 'jk', 'j', 'j', 'j', 'j', 'j', 'j', 'j', 'j', 'j', 'Adecuada', '0-2', 'V', 'hj', 'hj', 'hj', 'hj', 'Atrofia', 'sdf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbpacientes`
--

CREATE TABLE `tbpacientes` (
  `paciente_id` int(11) NOT NULL,
  `paciente_nombre` varchar(50) NOT NULL,
  `paciente_edad` int(11) NOT NULL,
  `paciente_hb` date NOT NULL,
  `paciente_telefono` int(16) NOT NULL,
  `paciente_domicilio` varchar(40) NOT NULL,
  `paciente_codigo_postal` int(11) NOT NULL,
  `paciente_estado_civil` varchar(20) NOT NULL,
  `paciente_ocupacion` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbpacientes`
--

INSERT INTO `tbpacientes` (`paciente_id`, `paciente_nombre`, `paciente_edad`, `paciente_hb`, `paciente_telefono`, `paciente_domicilio`, `paciente_codigo_postal`, `paciente_estado_civil`, `paciente_ocupacion`) VALUES
(2, 'Miguel', 29, '1997-09-19', 676, 'ghj', 676, 'ghj', 'ghj'),
(5, 'Antonio Ayola ', 21, '1997-09-17', 214748, 'ghjg', 42185, 'hjkhj', 'hjh');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbperinatal`
--

CREATE TABLE `tbperinatal` (
  `perinatal_id` int(11) NOT NULL,
  `paciente_id` int(11) NOT NULL,
  `perinatal_localidad` varchar(40) NOT NULL,
  `perinatal_alfabeta` varchar(40) NOT NULL,
  `perinatal_estudios` varchar(25) NOT NULL,
  `perinatal_anos_aprobados` varchar(10) NOT NULL,
  `perinatal_estado_civil` varchar(25) NOT NULL,
  `perinatal_lugar_origen` varchar(40) NOT NULL,
  `perinatal_lugar_establecimiento` varchar(40) NOT NULL,
  `perinatal_numero_hc` varchar(40) NOT NULL,
  `perinatal_diabetes_familiar` varchar(10) NOT NULL,
  `perinatal_tbc_familiar` varchar(10) NOT NULL,
  `perinatal_hipertension_familiar` varchar(10) NOT NULL,
  `perinatal_gemelares_familiar` varchar(10) NOT NULL,
  `perinatal_otro_familiar` varchar(10) NOT NULL,
  `perinatal_diabetes_personal` varchar(10) NOT NULL,
  `perinatal_TBC_personal` varchar(20) NOT NULL,
  `perinatal_hipertension_personal` varchar(20) NOT NULL,
  `perinatal_cirugia_pelvica_personal` varchar(20) NOT NULL,
  `perinatal_infertilidad_personal` varchar(20) NOT NULL,
  `perinatal_VIH_personal` varchar(20) NOT NULL,
  `perinatal_otro_personal` varchar(20) NOT NULL,
  `perinatal_3_partos` varchar(20) NOT NULL,
  `perinatal_gestas` varchar(20) NOT NULL,
  `perinatal_partos` varchar(20) NOT NULL,
  `perinatal_nacidos_vivos` varchar(20) NOT NULL,
  `perinatal_viven` varchar(20) NOT NULL,
  `perinatal_fin_anterior_embarazo_mes` varchar(20) NOT NULL,
  `perinatal_fin_anterior_embarazo_ano` varchar(20) NOT NULL,
  `perinatal_rn_menor_2500` varchar(20) NOT NULL,
  `perinatal_abortos` int(11) NOT NULL,
  `perinatal_vaginales` int(11) NOT NULL,
  `perinatal_nacidos_muertos` int(11) NOT NULL,
  `perinatal_muertos_1ra_sem` int(11) NOT NULL,
  `perinatal_despues_1ra_sem` int(11) NOT NULL,
  `perinatal_rn_mayor_peso` int(11) NOT NULL,
  `perinatal_gemelares` varchar(20) NOT NULL,
  `perinatal_cesareas` int(11) NOT NULL,
  `perinatal_peso_anterior` int(11) NOT NULL,
  `perinatal_talla` int(11) NOT NULL,
  `perinatal_FUM_dia` int(11) NOT NULL,
  `perinatal_FUM_mes` int(11) NOT NULL,
  `perinatal_FUM_ano` int(11) NOT NULL,
  `perinatal_FPP_dia` int(11) NOT NULL,
  `perinatal_FPP_mes` int(11) NOT NULL,
  `perinatal_FPP_ano` int(11) NOT NULL,
  `perinatal_dudas` varchar(20) NOT NULL,
  `perinatal_antitetanica_previa` varchar(20) NOT NULL,
  `perinatal_antitetanica_actual` varchar(20) NOT NULL,
  `perinatal_1` varchar(20) NOT NULL,
  `perinatal_2B` varchar(20) NOT NULL,
  `perinatal_grupo` varchar(20) NOT NULL,
  `perinatal_sensibil` varchar(20) NOT NULL,
  `perinatal_fuma` varchar(20) NOT NULL,
  `perinatal_alcohol` varchar(20) NOT NULL,
  `perinatal_Rh` varchar(20) NOT NULL,
  `perinatal_cigarros_dia` varchar(20) NOT NULL,
  `perinatal_drogas` varchar(20) NOT NULL,
  `perinatal_hozpitalizacion_embarazo` varchar(20) NOT NULL,
  `perinatal_lugar_traslado` varchar(20) NOT NULL,
  `perinatal_traslado` varchar(20) NOT NULL,
  `perinatal_ex_clinico` varchar(20) NOT NULL,
  `perinatal_ex_mamas` varchar(20) NOT NULL,
  `perinatal_ex_odont` varchar(20) NOT NULL,
  `perinatal_pelvis_normal` varchar(20) NOT NULL,
  `perinatal_papanic` varchar(20) NOT NULL,
  `perinatal_colposcopia` varchar(20) NOT NULL,
  `perinatal_cervix` varchar(20) NOT NULL,
  `perinatal_VDRL` varchar(20) NOT NULL,
  `perinatal_VDRL_dia` varchar(20) NOT NULL,
  `perinatal_VDRL_mes` varchar(20) NOT NULL,
  `perinatal_VDRL2` varchar(20) NOT NULL,
  `perinatal_VDRL2_dia` varchar(20) NOT NULL,
  `perinatal_VDRL2_mes` varchar(20) NOT NULL,
  `perinatal_Hb` varchar(20) NOT NULL,
  `perinatal_Hb_dia` varchar(20) NOT NULL,
  `perinatal_Hb_mes` varchar(20) NOT NULL,
  `perinatal_Hb2` varchar(20) NOT NULL,
  `perinatal_Hb2_dia` varchar(20) NOT NULL,
  `perinatal_Hb2_mes` varchar(20) NOT NULL,
  `perinatal_semanas_amenorrea1` varchar(20) NOT NULL,
  `perinatal_semanas_amenorrea2` varchar(20) NOT NULL,
  `perinatal_semanas_amenorrea3` varchar(20) NOT NULL,
  `perinatal_semanas_amenorrea4` varchar(20) NOT NULL,
  `perinatal_semanas_amenorrea5` varchar(20) NOT NULL,
  `perinatal_semanas_amenorrea6` varchar(20) NOT NULL,
  `perinatal_semanas_amenorrea7` varchar(20) NOT NULL,
  `perinatal_semanas_amenorrea8` varchar(20) NOT NULL,
  `perinatal_semanas_amenorrea9` varchar(20) NOT NULL,
  `perinatal_peso1` varchar(20) NOT NULL,
  `perinatal_peso2` varchar(20) NOT NULL,
  `perinatal_peso3` varchar(20) NOT NULL,
  `perinatal_peso4` varchar(20) NOT NULL,
  `perinatal_peso5` varchar(20) NOT NULL,
  `perinatal_peso6` varchar(20) NOT NULL,
  `perinatal_peso7` varchar(20) NOT NULL,
  `perinatal_peso8` varchar(20) NOT NULL,
  `perinatal_peso9` varchar(20) NOT NULL,
  `perinatal_tension_arterial1` varchar(20) NOT NULL,
  `perinatal_tension_arterial2` varchar(20) NOT NULL,
  `perinatal_tension_arterial3` varchar(20) NOT NULL,
  `perinatal_tension_arterial4` varchar(20) NOT NULL,
  `perinatal_tension_arterial5` varchar(20) NOT NULL,
  `perinatal_tension_arterial6` varchar(20) NOT NULL,
  `perinatal_tension_arterial7` varchar(20) NOT NULL,
  `perinatal_tension_arterial8` varchar(20) NOT NULL,
  `perinatal_tension_arterial9` varchar(20) NOT NULL,
  `perinatal_alt_uterina1` varchar(20) NOT NULL,
  `perinatal_alt_uterina2` varchar(20) NOT NULL,
  `perinatal_alt_uterina3` varchar(20) NOT NULL,
  `perinatal_alt_uterina4` varchar(20) NOT NULL,
  `perinatal_alt_uterina5` varchar(20) NOT NULL,
  `perinatal_alt_uterina6` varchar(20) NOT NULL,
  `perinatal_alt_uterina7` varchar(20) NOT NULL,
  `perinatal_alt_uterina8` varchar(20) NOT NULL,
  `perinatal_alt_uterina9` varchar(20) NOT NULL,
  `perinatal_FCF1` varchar(20) NOT NULL,
  `perinatal_FCF2` varchar(20) NOT NULL,
  `perinatal_FCF3` varchar(20) NOT NULL,
  `perinatal_FCF4` varchar(20) NOT NULL,
  `perinatal_FCF5` varchar(20) NOT NULL,
  `perinatal_FCF6` varchar(20) NOT NULL,
  `perinatal_FCF7` varchar(20) NOT NULL,
  `perinatal_FCF8` varchar(20) NOT NULL,
  `perinatal_FCF9` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbperinatal`
--

INSERT INTO `tbperinatal` (`perinatal_id`, `paciente_id`, `perinatal_localidad`, `perinatal_alfabeta`, `perinatal_estudios`, `perinatal_anos_aprobados`, `perinatal_estado_civil`, `perinatal_lugar_origen`, `perinatal_lugar_establecimiento`, `perinatal_numero_hc`, `perinatal_diabetes_familiar`, `perinatal_tbc_familiar`, `perinatal_hipertension_familiar`, `perinatal_gemelares_familiar`, `perinatal_otro_familiar`, `perinatal_diabetes_personal`, `perinatal_TBC_personal`, `perinatal_hipertension_personal`, `perinatal_cirugia_pelvica_personal`, `perinatal_infertilidad_personal`, `perinatal_VIH_personal`, `perinatal_otro_personal`, `perinatal_3_partos`, `perinatal_gestas`, `perinatal_partos`, `perinatal_nacidos_vivos`, `perinatal_viven`, `perinatal_fin_anterior_embarazo_mes`, `perinatal_fin_anterior_embarazo_ano`, `perinatal_rn_menor_2500`, `perinatal_abortos`, `perinatal_vaginales`, `perinatal_nacidos_muertos`, `perinatal_muertos_1ra_sem`, `perinatal_despues_1ra_sem`, `perinatal_rn_mayor_peso`, `perinatal_gemelares`, `perinatal_cesareas`, `perinatal_peso_anterior`, `perinatal_talla`, `perinatal_FUM_dia`, `perinatal_FUM_mes`, `perinatal_FUM_ano`, `perinatal_FPP_dia`, `perinatal_FPP_mes`, `perinatal_FPP_ano`, `perinatal_dudas`, `perinatal_antitetanica_previa`, `perinatal_antitetanica_actual`, `perinatal_1`, `perinatal_2B`, `perinatal_grupo`, `perinatal_sensibil`, `perinatal_fuma`, `perinatal_alcohol`, `perinatal_Rh`, `perinatal_cigarros_dia`, `perinatal_drogas`, `perinatal_hozpitalizacion_embarazo`, `perinatal_lugar_traslado`, `perinatal_traslado`, `perinatal_ex_clinico`, `perinatal_ex_mamas`, `perinatal_ex_odont`, `perinatal_pelvis_normal`, `perinatal_papanic`, `perinatal_colposcopia`, `perinatal_cervix`, `perinatal_VDRL`, `perinatal_VDRL_dia`, `perinatal_VDRL_mes`, `perinatal_VDRL2`, `perinatal_VDRL2_dia`, `perinatal_VDRL2_mes`, `perinatal_Hb`, `perinatal_Hb_dia`, `perinatal_Hb_mes`, `perinatal_Hb2`, `perinatal_Hb2_dia`, `perinatal_Hb2_mes`, `perinatal_semanas_amenorrea1`, `perinatal_semanas_amenorrea2`, `perinatal_semanas_amenorrea3`, `perinatal_semanas_amenorrea4`, `perinatal_semanas_amenorrea5`, `perinatal_semanas_amenorrea6`, `perinatal_semanas_amenorrea7`, `perinatal_semanas_amenorrea8`, `perinatal_semanas_amenorrea9`, `perinatal_peso1`, `perinatal_peso2`, `perinatal_peso3`, `perinatal_peso4`, `perinatal_peso5`, `perinatal_peso6`, `perinatal_peso7`, `perinatal_peso8`, `perinatal_peso9`, `perinatal_tension_arterial1`, `perinatal_tension_arterial2`, `perinatal_tension_arterial3`, `perinatal_tension_arterial4`, `perinatal_tension_arterial5`, `perinatal_tension_arterial6`, `perinatal_tension_arterial7`, `perinatal_tension_arterial8`, `perinatal_tension_arterial9`, `perinatal_alt_uterina1`, `perinatal_alt_uterina2`, `perinatal_alt_uterina3`, `perinatal_alt_uterina4`, `perinatal_alt_uterina5`, `perinatal_alt_uterina6`, `perinatal_alt_uterina7`, `perinatal_alt_uterina8`, `perinatal_alt_uterina9`, `perinatal_FCF1`, `perinatal_FCF2`, `perinatal_FCF3`, `perinatal_FCF4`, `perinatal_FCF5`, `perinatal_FCF6`, `perinatal_FCF7`, `perinatal_FCF8`, `perinatal_FCF9`) VALUES
(2, 2, 'sdsd', 'Si', 'Primaria', '2', 'UniÃ³n libre', 'dsd', 'jjklj', '212', 'Si', 'Si', 'Si', 'Si', 'No', 'No', 'No', 'Si', 'Si', 'No', 'No', 'asa', 'Si', '7', '8', '7', '6', '7', '6', 'No', 7, 7, 87, 7, 8, 7, 'Si', 76, 7, 8, 7, 8, 7, 7, 7, 7, 'Si', 'Si', 'No', '7', '6', 'hj', 'Si', 'Si', 'Si', '+', '6', 'No', 'hjhk', 'hj', 'EnvÃ­o', 'Si', 'Si', 'Si', 'pelvis', 'Si', 'Si', 'Si', '+', '78', '7', '+', '7', '7', 'hb', '7', '6', 'No', '2', '4', 'h', 'j', 'j', 'j', 'j', 'j', 'j', 'j', 'k', 'j', 'j', 'j', 'h', 'j', 'h', 'y', 'g', 't', 'f', 'b', 'm', '2', 'm', 'n', 'm', 'm', 'm', 'm', 'm', 'm', 'm', 'm', 'm', 'm', 'm', 'm', 'm', 'm', 'm', 'm', 'm', 'n', 'n', 'n', 'v'),
(5, 5, 'hjk', 'Si', 'Secunfaria', '3', 'Soltera', 'hj', 'hjkh', '676', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 's', 'Si', 's', 's', 's', 's', 's', 'shj', 'Si', 0, 0, 0, 0, 0, 0, 'Si', 0, 0, 67, 7, 5, 5, 5, 3, 2, 'Si', 'Si', 'Si', '2', '7', 'yui', 'Si', 'Si', 'Si', '+', 's', 'Si', 's', 's', 'EnvÃ­o', 'Si', 'Si', 'Si', 'pelvis', 'Si', 'Si', 'Si', '+', 's', 's', '+', 's', 's', 'hb', 's', 's', 'Si', '3', '2', 'y', 'y', 'y', 'y', 'y', 'u', 'u', 'u', 'y', 'u', 'y', 'y', 'y', 'y', 'y', 'g', 'g', 'b', 'h', 'b', 'n', 'k', 'd', 'u', 'u', 'u', 'j', 'k', 'j', 'k', 'j', 'k', 'j', 'j', 'j', 'j', 'k', 'k', 'k', 'k', 'j', 'h', 'j', 'j', 'h');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbrecetas_medicas`
--

CREATE TABLE `tbrecetas_medicas` (
  `receta_medica_id` int(11) NOT NULL,
  `paciente_id` int(11) NOT NULL,
  `receta_medica_fecha` date NOT NULL,
  `receta_medica_indicaciones` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbrecetas_medicas`
--

INSERT INTO `tbrecetas_medicas` (`receta_medica_id`, `paciente_id`, `receta_medica_fecha`, `receta_medica_indicaciones`) VALUES
(7, 2, '2019-02-12', 'ssfscha'),
(8, 5, '2019-02-25', 'sdfhjkhdfjsjhdsdfsdf sdfsf sdfsdfsdfsd sdfsdf\r\nsdf'),
(9, 5, '2019-02-12', 'sdfsdf'),
(10, 5, '2019-02-09', 'fasfasf'),
(11, 5, '2019-03-09', 'fsdfffff'),
(12, 5, '2019-03-21', 'aachacahcahcahahac aada'),
(15, 5, '2019-03-19', 'ya ya adsd'),
(16, 5, '2019-03-19', 'ya ya adsd'),
(17, 5, '2019-03-19', 'ya ya adsd'),
(18, 2, '2019-03-06', 'holiasodasdasd sd'),
(19, 2, '2019-03-21', 'yayayay'),
(20, 2, '2019-03-21', 'yayayayvdfdf'),
(21, 2, '2019-03-27', 'dede'),
(22, 5, '2019-03-16', 'dfsdfsd'),
(23, 5, '2019-03-12', 'chande ded'),
(24, 5, '2019-03-12', 'otro intesd'),
(25, 5, '2019-03-08', 'dfsdf'),
(26, 5, '2019-03-04', 'ffd');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_historias_clinicas`
--

CREATE TABLE `tb_historias_clinicas` (
  `historiaC_id` int(11) NOT NULL,
  `paciente_id` int(11) NOT NULL,
  `historiaC_fecha` date NOT NULL,
  `historiaC_hora` varchar(10) NOT NULL,
  `historiaC_escolaridad` varchar(20) NOT NULL,
  `historiaC_religion` varchar(25) NOT NULL,
  `historiaC_responsable_legal` varchar(50) NOT NULL,
  `historiaC_parentesco` varchar(15) NOT NULL,
  `historiaC_antecedente_heredofamiliar` varchar(100) NOT NULL,
  `historiaC_antecedente_personal_no_patologico` varchar(100) NOT NULL,
  `historiaC_antecedente_personal_patologico` varchar(100) NOT NULL,
  `historiaC_menarca` varchar(10) NOT NULL,
  `historiaC_ritmo` varchar(20) NOT NULL,
  `historiaC_dismenorrea` varchar(20) NOT NULL,
  `historiaC_toallas_dia` int(11) NOT NULL,
  `historiaC_normales` int(11) NOT NULL,
  `historiaC_parejas_sexuales` int(11) NOT NULL,
  `historiaC_mpf` varchar(20) NOT NULL,
  `historiaC_tiempo_de_uso` varchar(20) NOT NULL,
  `historiaC_docma` varchar(20) NOT NULL,
  `historiaC_gesta` varchar(20) NOT NULL,
  `historiaC_para` varchar(20) NOT NULL,
  `historiaC_aborto` varchar(20) NOT NULL,
  `historiaC_legrado` varchar(20) NOT NULL,
  `historiaC_ameu` varchar(20) NOT NULL,
  `historiaC_cesaria` varchar(20) NOT NULL,
  `historiaC_indicacion` varchar(50) NOT NULL,
  `historiaC_edad_primer_embarazo` varchar(20) NOT NULL,
  `historiaC_fecha_ultimo_parto` varchar(20) NOT NULL,
  `historiaC_fecha_ultimo_aborto` varchar(20) NOT NULL,
  `historiaC_fecha_ultima_cesaria` varchar(20) NOT NULL,
  `historiaC_indicacion2` varchar(20) NOT NULL,
  `historiaC_peso` varchar(20) NOT NULL,
  `historiaC_productos` varchar(20) NOT NULL,
  `historiaC_malformaciones` varchar(5) NOT NULL,
  `historiaC_describir` varchar(40) NOT NULL,
  `historiaC_embarazo_actual` varchar(100) NOT NULL,
  `historiaC_padecimiento_actual` varchar(100) NOT NULL,
  `historiaC_peso_exploracion_fisica` varchar(20) NOT NULL,
  `historiaC_T` varchar(20) NOT NULL,
  `historiaC_TA` varchar(20) NOT NULL,
  `historiaC_FC` varchar(20) NOT NULL,
  `historiaC_FR` varchar(20) NOT NULL,
  `historiaC_TEM` varchar(20) NOT NULL,
  `historiaC_cabeza_cuello` varchar(20) NOT NULL,
  `historiaC_cardiorespiratorio` varchar(20) NOT NULL,
  `historiaC_glandulas` varchar(20) NOT NULL,
  `historiaC_abdomen` varchar(20) NOT NULL,
  `historiaC_FU` varchar(20) NOT NULL,
  `historiaC_S` varchar(20) NOT NULL,
  `historiaC_P` varchar(20) NOT NULL,
  `historiaC_D` varchar(20) NOT NULL,
  `historiaC_LIB_ABO_ENC` varchar(20) NOT NULL,
  `historiaC_tacto_vaginal` varchar(20) NOT NULL,
  `historiaC_dilatacion` varchar(20) NOT NULL,
  `historiaC_variedad_de_posicion` varchar(20) NOT NULL,
  `historiaC_especuloscopia` varchar(20) NOT NULL,
  `historiaC_menbranas_integras` varchar(20) NOT NULL,
  `historiaC_fecha_hora` varchar(20) NOT NULL,
  `historiaC_caracteristicas_de_liquido` varchar(20) NOT NULL,
  `historiaC_exploracion_ginecologica` varchar(20) NOT NULL,
  `historiaC_pelvis` varchar(20) NOT NULL,
  `historiaC_edema` varchar(20) NOT NULL,
  `historiaC_hiperrflexia` varchar(20) NOT NULL,
  `historiaC_llenado_capilar` varchar(20) NOT NULL,
  `historiaC_paraclinicos` varchar(20) NOT NULL,
  `historiaC_diagnosticos` varchar(70) NOT NULL,
  `historiaC_analisis` varchar(100) NOT NULL,
  `historiaC_plan` varchar(100) NOT NULL,
  `historiaC_pronostico` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tb_historias_clinicas`
--

INSERT INTO `tb_historias_clinicas` (`historiaC_id`, `paciente_id`, `historiaC_fecha`, `historiaC_hora`, `historiaC_escolaridad`, `historiaC_religion`, `historiaC_responsable_legal`, `historiaC_parentesco`, `historiaC_antecedente_heredofamiliar`, `historiaC_antecedente_personal_no_patologico`, `historiaC_antecedente_personal_patologico`, `historiaC_menarca`, `historiaC_ritmo`, `historiaC_dismenorrea`, `historiaC_toallas_dia`, `historiaC_normales`, `historiaC_parejas_sexuales`, `historiaC_mpf`, `historiaC_tiempo_de_uso`, `historiaC_docma`, `historiaC_gesta`, `historiaC_para`, `historiaC_aborto`, `historiaC_legrado`, `historiaC_ameu`, `historiaC_cesaria`, `historiaC_indicacion`, `historiaC_edad_primer_embarazo`, `historiaC_fecha_ultimo_parto`, `historiaC_fecha_ultimo_aborto`, `historiaC_fecha_ultima_cesaria`, `historiaC_indicacion2`, `historiaC_peso`, `historiaC_productos`, `historiaC_malformaciones`, `historiaC_describir`, `historiaC_embarazo_actual`, `historiaC_padecimiento_actual`, `historiaC_peso_exploracion_fisica`, `historiaC_T`, `historiaC_TA`, `historiaC_FC`, `historiaC_FR`, `historiaC_TEM`, `historiaC_cabeza_cuello`, `historiaC_cardiorespiratorio`, `historiaC_glandulas`, `historiaC_abdomen`, `historiaC_FU`, `historiaC_S`, `historiaC_P`, `historiaC_D`, `historiaC_LIB_ABO_ENC`, `historiaC_tacto_vaginal`, `historiaC_dilatacion`, `historiaC_variedad_de_posicion`, `historiaC_especuloscopia`, `historiaC_menbranas_integras`, `historiaC_fecha_hora`, `historiaC_caracteristicas_de_liquido`, `historiaC_exploracion_ginecologica`, `historiaC_pelvis`, `historiaC_edema`, `historiaC_hiperrflexia`, `historiaC_llenado_capilar`, `historiaC_paraclinicos`, `historiaC_diagnosticos`, `historiaC_analisis`, `historiaC_plan`, `historiaC_pronostico`) VALUES
(2, 2, '2019-02-26', '08:00', 'yui', 'yui', 'yu', 'yui', 'hjkh', 'hjk', 'hjk', 'hj', 'hjk', 'hjk', 0, 0, 0, 'hjk', 'hk', 'hj', 'hjk', 'hj', 'hj', 'hj', 'hj', 'hj', 'hj', 'hj', 'hj', 'hj', 'hj', 'jh', 'j', 'h', 'j', 'k', 'h ', 'j', 'k', 'j', 'h', 'j', 'k', 'j', 'h', 'j', 'k', 'j', 'j', 'h', 'j', 'k', 'j', 'j', 'j', 'j', 'j', 'j', 'j', 'j', 'j', 'j', 'j', 'j', 'h', 'h', 'h', 'h', 'h', 'h'),
(5, 5, '0000-00-00', '', 'HJKhjk', 'hjk', 'hj', 'jh', 'hj', 'jh', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'ghg', '', '', '', '  ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbcolposcopias`
--
ALTER TABLE `tbcolposcopias`
  ADD PRIMARY KEY (`colposcopia_id`),
  ADD KEY `paciente_id` (`paciente_id`);

--
-- Indices de la tabla `tbpacientes`
--
ALTER TABLE `tbpacientes`
  ADD PRIMARY KEY (`paciente_id`);

--
-- Indices de la tabla `tbperinatal`
--
ALTER TABLE `tbperinatal`
  ADD PRIMARY KEY (`perinatal_id`),
  ADD KEY `paciente_id` (`paciente_id`);

--
-- Indices de la tabla `tbrecetas_medicas`
--
ALTER TABLE `tbrecetas_medicas`
  ADD PRIMARY KEY (`receta_medica_id`),
  ADD KEY `paciente_id` (`paciente_id`);

--
-- Indices de la tabla `tb_historias_clinicas`
--
ALTER TABLE `tb_historias_clinicas`
  ADD PRIMARY KEY (`historiaC_id`),
  ADD KEY `paciente_id` (`paciente_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbcolposcopias`
--
ALTER TABLE `tbcolposcopias`
  MODIFY `colposcopia_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `tbpacientes`
--
ALTER TABLE `tbpacientes`
  MODIFY `paciente_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `tbperinatal`
--
ALTER TABLE `tbperinatal`
  MODIFY `perinatal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `tbrecetas_medicas`
--
ALTER TABLE `tbrecetas_medicas`
  MODIFY `receta_medica_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `tb_historias_clinicas`
--
ALTER TABLE `tb_historias_clinicas`
  MODIFY `historiaC_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbcolposcopias`
--
ALTER TABLE `tbcolposcopias`
  ADD CONSTRAINT `tbcolposcopias_ibfk_1` FOREIGN KEY (`paciente_id`) REFERENCES `tbpacientes` (`paciente_id`);

--
-- Filtros para la tabla `tbperinatal`
--
ALTER TABLE `tbperinatal`
  ADD CONSTRAINT `tbperinatal_ibfk_1` FOREIGN KEY (`paciente_id`) REFERENCES `tbpacientes` (`paciente_id`);

--
-- Filtros para la tabla `tbrecetas_medicas`
--
ALTER TABLE `tbrecetas_medicas`
  ADD CONSTRAINT `tbrecetas_medicas_ibfk_1` FOREIGN KEY (`paciente_id`) REFERENCES `tbpacientes` (`paciente_id`);

--
-- Filtros para la tabla `tb_historias_clinicas`
--
ALTER TABLE `tb_historias_clinicas`
  ADD CONSTRAINT `tb_historias_clinicas_ibfk_1` FOREIGN KEY (`paciente_id`) REFERENCES `tbpacientes` (`paciente_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
