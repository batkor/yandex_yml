<?php

namespace Drupal\yandex_yml\YandexYml\Shop;

/**
 * Class YandexYmlShop.
 *
 * @see https://yandex.ru/support/partnermarket/export/yml.html
 */
class YandexYmlShop {

  /**
   * @var string
   */
  private $name;

  /**
   * @var string
   */
  private $company;

  /**
   * @var string
   */
  private $url;

  /**
   * @var string
   */
  private $platform;

  /**
   * @var string
   */
  private $version;

  /**
   * @var string
   */
  private $agency;

  /**
   * @var string
   */
  private $email;

  /**
   * @var int
   */
  private $cpa;

  /**
   * @param string $name
   *
   * @return YandexYmlShop
   */
  public function setName($name) {
    $this->name = $name;
    return $this;
  }

  /**
   * @return string
   */
  public function getName() {
    return $this->name;
  }

  /**
   * @param string $company
   *
   * @return YandexYmlShop
   */
  public function setCompany($company) {
    $this->company = $company;
    return $this;
  }

  /**
   * @return string
   */
  public function getCompany() {
    return $this->company;
  }

  /**
   * @param string $url
   *
   * @return YandexYmlShop
   */
  public function setUrl($url) {
    $this->url = $url;
    return $this;
  }

  /**
   * @return string
   */
  public function getUrl() {
    return $this->url;
  }

  /**
   * @param string $platform
   *
   * @return YandexYmlShop
   */
  public function setPlatform($platform) {
    $this->platform = $platform;
    return $this;
  }

  /**
   * @return string
   */
  public function getPlatform() {
    return $this->platform;
  }

  /**
   * @param string $version
   *
   * @return YandexYmlShop
   */
  public function setVersion($version) {
    $this->version = $version;
    return $this;
  }

  /**
   * @return string
   */
  public function getVersion() {
    return $this->version;
  }

  /**
   * @param string $agency
   *
   * @return YandexYmlShop
   */
  public function setAgency($agency) {
    $this->agency = $agency;
    return $this;
  }

  /**
   * @return string
   */
  public function getAgency() {
    return $this->agency;
  }

  /**
   * @param string $email
   *
   * @return YandexYmlShop
   */
  public function setEmail($email) {
    $this->email = $email;
    return $this;
  }

  /**
   * @return string
   */
  public function getEmail() {
    return $this->email;
  }

  /**
   * @param int $cpa
   *
   * @return YandexYmlShop
   */
  public function setCpa($cpa) {
    $this->cpa = $cpa;
    return $this;
  }

  /**
   * @return int
   */
  public function getCpa() {
    return $this->cpa;
  }

  /**
   * Set default values.
   */
  public function __construct() {
    $this->setUrl(\Drupal::request()->getSchemeAndHttpHost());
    $this->setPlatform('Drupal');
    $this->setVersion(\Drupal::VERSION);
  }

}