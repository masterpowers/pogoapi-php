<?php
namespace POGOAPI\Util;

class Hex {
  /**
   * @param float $float
   * @return string
   */
  public static function float2hex($float) {
    return dechex(unpack("Q", pack("d", $float))[1]);
  }

  /**
   * @param float $float
   * @return string
   */
  public static function d2h($float) {
    return pack("H*", self::float2hex($float));
  }
}
