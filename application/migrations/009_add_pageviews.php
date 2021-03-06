<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @author      OA Wu <comdan66@gmail.com>
 * @copyright   Copyright (c) 2014 OA Wu Design
 */
class Migration_Add_pageviews extends CI_Migration {
  public function up () {
    $sql = "CREATE TABLE `pageviews` (
              `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
              `model_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
              `model_id` int(11) NOT NULL,
              `counts` int(11) NOT NULL DEFAULT '0',
              `date` date NOT NULL DEFAULT '0000-00-00',
              `created_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
              `updated_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
              PRIMARY KEY (`id`),
              KEY `model_name_id_date_index` (`model_name`, `model_id`, `date`)
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;";
    $this->db->query ($sql);
    
    $sql = "CREATE TABLE `delete_pageviews` (
              `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
              `origin_id` int(11) NOT NULL,
              `model_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
              `model_id` int(11) NOT NULL,
              `counts` int(11) NOT NULL DEFAULT '0',
              `date` date NOT NULL DEFAULT '0000-00-00',
              `created_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
              `updated_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
              PRIMARY KEY (`id`),
              KEY `model_name_id_date_index` (`model_name`, `model_id`, `date`)
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;";
    $this->db->query ($sql);
  }
}
