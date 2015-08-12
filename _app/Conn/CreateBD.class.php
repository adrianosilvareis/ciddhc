<?php

/**
 * CreateBD.class.php [Conn]
 * 
 * Cria as tabelas do sistema caso não exista.
 * 
 * @copyright (c) year, Adriano S. Reis Programador
 */
class CreateBD {

    private static $tables;
    
    public static function CreateTable() {
        self::Tables();
        try {
            $stmt = Conn::prepare(self::$tables);
            $stmt->execute();
        } catch (PDOException $ex) {
            PHPErro($ex->getCode(), $ex->getMessage(), $ex->getFile(), $ex->getLine());
        }
    }

    private static function Tables(){
        //table ws_
        self::$tables = "CREATE TABLE IF NOT EXISTS ws_categories (category_id INT NOT NULL AUTO_INCREMENT, category_parent INT, category_name VARCHAR(255), category_title VARCHAR(255), category_content VARCHAR(500), category_date TIMESTAMP, category_views INT, category_last_view TIMESTAMP DEFAULT '0000-00-00 00:00:00' NOT NULL, PRIMARY KEY (category_id));";
        self::$tables .= "CREATE TABLE IF NOT EXISTS ws_posts (post_id INT NOT NULL AUTO_INCREMENT, post_name VARCHAR(255), post_title VARCHAR(255), post_content VARCHAR(500), post_cover VARCHAR(255), post_date TIMESTAMP, post_author INT, post_category INT, post_cat_parent INT, post_views DECIMAL(10) DEFAULT 0 , post_last_views TIMESTAMP, post_status INT, post_type VARCHAR(255), PRIMARY KEY (post_id));";
        self::$tables .= "CREATE TABLE IF NOT EXISTS ws_posts_gallery (post_id INT, gallery_id INT NOT NULL AUTO_INCREMENT, gallery_image VARCHAR(255), gallery_date TIMESTAMP, PRIMARY KEY (gallery_id));";
        self::$tables .= "CREATE TABLE IF NOT EXISTS ws_siteviews (siteviews_id INT NOT NULL AUTO_INCREMENT, siteviews_date DATE NOT NULL, siteviews_users DECIMAL(10) NOT NULL, siteviews_views DECIMAL(10) NOT NULL, siteviews_pages DECIMAL(10) NOT NULL, PRIMARY KEY (siteviews_id));";
        self::$tables .= "CREATE TABLE IF NOT EXISTS ws_siteviews_agent (agent_id INT NOT NULL AUTO_INCREMENT, agent_name VARCHAR(255) NOT NULL, agent_views DECIMAL(10) NOT NULL, agent_lastview TIMESTAMP DEFAULT CURRENT_TIMESTAMP  NOT NULL, PRIMARY KEY (agent_id));";
        self::$tables .= "CREATE TABLE IF NOT EXISTS ws_siteviews_online (online_id INT NOT NULL AUTO_INCREMENT, online_session VARCHAR(255) NOT NULL, online_startview TIMESTAMP DEFAULT CURRENT_TIMESTAMP  NOT NULL, online_endview TIMESTAMP NOT NULL, online_ip VARCHAR(255) NOT NULL, online_url VARCHAR(255) NOT NULL, online_agent VARCHAR(255) NOT NULL, agent_name VARCHAR(255), PRIMARY KEY (online_id));";
        self::$tables .= "CREATE TABLE IF NOT EXISTS ws_users (user_id INT NOT NULL AUTO_INCREMENT, user_name VARCHAR(255) NOT NULL, user_lastname VARCHAR(255) NOT NULL, user_email VARCHAR(255) NOT NULL, user_password VARCHAR(255) NOT NULL, user_registration TIMESTAMP DEFAULT CURRENT_TIMESTAMP  NOT NULL, user_lastupdate TIMESTAMP, user_level INT DEFAULT 1  NOT NULL, PRIMARY KEY (user_id));";
        
        //table app_
        self::$tables .= "CREATE TABLE IF NOT EXISTS app_niver(niver_id INT NOT NULL AUTO_INCREMENT,niver_nome VARCHAR(50),niver_setor VARCHAR(50),niver_data DATE,PRIMARY KEY (niver_id));";
        self::$tables .= "";
        self::$tables .= "";
        
        //nav_
        self::$tables .= "CREATE TABLE IF NOT EXISTS nav_bar(bar_id INT NOT NULL AUTO_INCREMENT,bar_title VARCHAR(50),bar_content VARCHAR(50),bar_data DATE,PRIMARY KEY (bar_id));";
        self::$tables .= "CREATE TABLE IF NOT EXISTS nav_menu(menu_id INT NOT NULL AUTO_INCREMENT,menu_title VARCHAR(50),menu_link VARCHAR(50),menu_parent INT,menu_bar INT,menu_order INT,menu_data DATE,PRIMARY KEY (menu_id));";
        
        self::$tables .= "";        
    }
}
