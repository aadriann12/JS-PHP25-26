<?php
/**************************************************************
 * FECHAS EN PHP – CHULETA COMPLETA (Tema 2 DWES)
 * Incluye: timezone, date(), getdate(), time(), strtotime(),
 * formatos, traducciones EN→ES, sumas y restas de tiempo,
 * diferencias entre fechas, composición de cadenas, validaciones.
 **************************************************************/

// 1) ZONA HORARIA -----------------------------------------------------------
// Siempre fija la zona para evitar sorpresas con la hora local.
date_default_timezone_set('Europe/Madrid'); // ← España peninsular

// 2) AHORA MISMO: time() y date() -------------------------------------------
// time() → timestamp (segundos desde 1-1-1970 00:00:00 UTC)
$ahoraTs = time(); // útil para cálculos

// date("formato", timestamp?) → cadena formateada. Si omites el segundo
// parámetro, usa "ahora".
echo "<h2>Ahora</h2>";
echo "Timestamp actual (time): {$ahoraTs}<br>";
echo "Fecha y hora (date Y-m-d H:i:s): " . date('Y-m-d H:i:s', $ahoraTs) . "<br>";
echo "Solo fecha (d/m/Y): " . date('d/m/Y') . "<br>";
echo "Solo hora (H:i): " . date('H:i') . "<br><hr>";

// 3) DESGLOSE DETALLADO: getdate() -----------------------------------------
// getdate(timestamp?) → array asociativo con pieza a pieza:
// ['weekday','mday','month','year','hours','minutes','seconds',...]
echo "<h2>getdate()</h2>";
$gd = getdate($ahoraTs);

// IMPORTANTE: getdate() suele traer 'weekday' y 'month' en INGLÉS.
// En examen puedes:
//  a) aceptarlo tal cual y comentarlo
//  b) traducirlo con arrays EN→ES (abajo).
echo "weekday (en): {$gd['weekday']} | month (en): {$gd['month']}<br>";
echo "mday: {$gd['mday']} | year: {$gd['year']} | hours: {$gd['hours']} | minutes: {$gd['minutes']}<br>";

// Traducción EN→ES (sencilla y aceptada en examen)
$diasEs = [
  'Monday'=>'lunes','Tuesday'=>'martes','Wednesday'=>'miércoles',
  'Thursday'=>'jueves','Friday'=>'viernes','Saturday'=>'sábado','Sunday'=>'domingo'
];
$mesesEs = [
  'January'=>'enero','February'=>'febrero','March'=>'marzo','April'=>'abril','May'=>'mayo','June'=>'junio',
  'July'=>'julio','August'=>'agosto','September'=>'septiembre','October'=>'octubre','November'=>'noviembre','December'=>'diciembre'
];
$weekdayEs = $diasEs[$gd['weekday']] ?? $gd['weekday']; // si no existe, deja el inglés
$monthEs   = $mesesEs[$gd['month']]   ?? $gd['month'];

echo "Traducción ES → Hoy es {$weekdayEs}, {$gd['mday']} de {$monthEs} de {$gd['year']}.<br><hr>";

// 4) CREAR FECHAS DESDE TEXTO: strtotime() ---------------------------------
// Convierte una cadena reconocible en un timestamp. Muy útil para
// fechas específicas o relativas.
echo "<h2>strtotime()</h2>";

// a) Texto ISO simple
$navidadTs = strtotime('2025-12-25 18:30'); // 'YYYY-mm-dd HH:ii'
if ($navidadTs !== false) {
  echo "Navidad 2025: " . date('l, d F Y H:i', $navidadTs) . "<br>";
} else {
  echo "Fecha de navidad inválida<br>";
}

// b) Fechas relativas respecto de "ahora"
$manianaTs   = strtotime('+1 day');          // mañana, misma hora
$proximaSem  = strtotime('+1 week');         // dentro de 7 días
$hace2Horas  = strtotime('-2 hours');        // hace dos horas

echo "Mañana: " . date('Y-m-d H:i:s', $manianaTs) . "<br>";
echo "Dentro de una semana: " . date('Y-m-d H:i:s', $proximaSem) . "<br>";
echo "Hace 2 horas: " . date('Y-m-d H:i:s', $hace2Horas) . "<br><hr>";

// 5) FORMATOS COMUNES DE date() --------------------------------------------
// (No memorices todos; recuerda los más usados: d, m, Y, H, i, s, l, F)
// d → día 01-31, j → día 1-31
// m → mes 01-12, n → mes 1-12
// Y → año 4 dígitos; y → 2 dígitos
// H → hora 00-23; i → minutos 00-59; s → segundos 00-59
// l (ele) → nombre del día en inglés; F → nombre del mes en inglés
echo "<h2>Formatos de date()</h2>";
echo "d/m/Y → " . date('d/m/Y') . "<br>";
echo "Y-m-d → " . date('Y-m-d') . "<br>";
echo "H:i:s → " . date('H:i:s') . "<br>";
echo "l, d F Y → " . date('l, d F Y') . " (en inglés por defecto)<br><hr>";

// 6) COMPOSICIÓN 'HUMANA' EN ESPAÑOL ---------------------------------------
// Una forma típica de examen: usar getdate() para palabras (traducidas)
// y date() para garantizar 2 dígitos en la hora/minutos.
echo "<h2>Cadena 'humana' en español</h2>";
$hoy = getdate(); // desglose del "ahora"
$weekdayEs = $diasEs[$hoy['weekday']] ?? $hoy['weekday'];
$monthEs   = $mesesEs[$hoy['month']]  ?? $hoy['month'];
$horaMin   = date('H:i'); // hora con minutos, dos dígitos

echo "Hoy es {$weekdayEs}, {$hoy['mday']} de {$monthEs} de {$hoy['year']}, y son las {$horaMin}.<br><hr>";

// 7) SUMAR/RESTAR TIEMPO CON ARITMÉTICA DE TIMESTAMPS ----------------------
// Un día = 60*60*24 segundos. Se puede sumar/restar directo al timestamp.
echo "<h2>Sumas/restas de tiempo</h2>";
$hoyTs = time();
$enTresDias = $hoyTs + 3*24*60*60; // +3 días
$hace10Min  = $hoyTs - 10*60;      // -10 minutos
echo "Dentro de 3 días: " . date('Y-m-d H:i:s', $enTresDias) . "<br>";
echo "Hace 10 minutos: " . date('Y-m-d H:i:s', $hace10Min) . "<br><hr>";

// 8) DIFERENCIAS ENTRE DOS FECHAS -----------------------------------------
// Resta de timestamps → diferencia en segundos; luego conviertes a días/horas.
echo "<h2>Diferencia entre fechas</h2>";
$inicio = strtotime('2025-10-01 00:00');
$fin    = strtotime('2025-10-21 21:00');
if ($inicio !== false && $fin !== false) {
  $diffSeg = $fin - $inicio;          // segundos
  $dias    = intdiv($diffSeg, 86400); // 86400 = 24*60*60
  $resto   = $diffSeg % 86400;
  $horas   = intdiv($resto, 3600);
  $resto   = $resto % 3600;
  $min     = intdiv($resto, 60);

  echo "Entre 2025-10-01 y 2025-10-21 21:00 hay {$dias} días, {$horas} horas y {$min} minutos.<br>";
} else {
  echo "Fechas inválidas para la diferencia<br>";
}
echo "<hr>";

// 9) VALIDACIÓN BÁSICA DE STRTOTIME ----------------------------------------
// strtotime() devuelve false si la cadena no se entiende. Siempre conviene comprobar.
echo "<h2>Validación de entrada</h2>";
$entradaUsuario = "2025-02-30 12:00"; // 30 de febrero no existe
$tsEntrada = strtotime($entradaUsuario);
if ($tsEntrada === false) {
  echo "La fecha '{$entradaUsuario}' es inválida (strtotime devolvió false).<br>";
} else {
  echo "Fecha válida: " . date('Y-m-d H:i:s', $tsEntrada) . "<br>";
}
echo "<hr>";

// 10) MUESTRA COMPLETA DE FECHA EN ESPAÑOL ---------------------------------
// Ejemplo final tipo examen: una sola línea con todo formateado “bonito”.
echo "<h2>Ejemplo final tipo examen</h2>";
$gdFinal = getdate(); // desglose actual
$wdEs = $diasEs[$gdFinal['weekday']] ?? $gdFinal['weekday'];
$moEs = $mesesEs[$gdFinal['month']]  ?? $gdFinal['month'];
$horaMinSeg = date('H:i:s'); // garantizamos ceros iniciales

echo "Fecha completa: {$wdEs}, {$gdFinal['mday']} de {$moEs} de {$gdFinal['year']} - {$horaMinSeg}<br>";

/********************************************************************
 * NOTAS RÁPIDAS (para memorizar):
 * - Siempre fija la zona: date_default_timezone_set('Europe/Madrid')
 * - date('formato', ts?) → formatea a cadena
 * - getdate(ts?) → array con weekday/month (normalmente en inglés)
 * - time() → timestamp actual (para cálculos)
 * - strtotime('texto') → texto→timestamp (acepta ISO y relativos)
 * - Traduce weekday/month con mapas EN→ES si te piden español
 * - Diferencias: resta de timestamps → segundos → convierte a d/h/m
 * - Asegura 2 dígitos con date('H:i') o sprintf('%02d', $min)
 ********************************************************************/
?>