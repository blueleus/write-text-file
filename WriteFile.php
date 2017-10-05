<?php

/**
 * Dos ejemplos de como implementar la escritura de archivos y la lectura
 * de datos o parametros por terminal en PHP.
 */

/**
 * Si se ejecuta por terminal se tiene en cuenta solo el primer parametro
 * pasado.
 */
if (isset($argv[1])) 
{
  /**
   * Implementacion fopen, fwrite y fclose
   * @var [type]
   */
  $file = fopen("archivo.log", "a");
  fwrite($file, date('c').' --> '.$argv[1] . PHP_EOL);
  fclose($file);

  /**
   * Implementacion file_put_contents
   */
  file_put_contents("archivo.log", "Otra implementacion" . PHP_EOL, FILE_APPEND | LOCK_EX);
}

