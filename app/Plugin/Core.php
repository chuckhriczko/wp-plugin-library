<?php
//Namespace our code for our application
namespace WPPlugin\Plugin;

//Include our PostTypes namespace
use \WPPlugin\PostTypes\PostType as PostType;

//Include our taxonomies namespace
use \WPPlugin\Taxonomies\Taxonomy as Taxonomy;

//Instantiate our class
class Core {
    //Instantiate our custom post type constant
   private static string $WPDS_POST_TYPE = 'wpds';
   private static string $WPDS_POST_TYPE_NAME = 'WP Plugin';
   private static string $WPDS_POST_TYPE_NAME_PLURAL = 'WP Plugin';
   private static string $WPDS_TAXONOMY_NAME = 'WPTags';
    
    /**********************************************************************************
     * Constructor, calls the init function
     * ********************************************************************************/
    public function __construct(){
        //Call our plugin initialization function
        self::init();
    }
    
    /**********************************************************************************
     * Getter for the post type, used by other classes
     * ********************************************************************************/
    public static function getPostType(){
        return self::$WPDS_POST_TYPE;
    }
    
    /**********************************************************************************
     * Initializes our plugin (hooks, filters, etc)
     * ********************************************************************************/
    public static function init(){
        //Create our custom taxonomy
        self::initCustomTaxonomy();
        
        //Create our custom post type
        self::initCustomPostType();
    }
    
    /**********************************************************************************
     * Creates our custom taxonomies
     * ********************************************************************************/
    protected static function initCustomTaxonomy(){
        //Instantiate our custom taxonomy object
        $taxAstrology = new Taxonomy(self::$WPDS_TAXONOMY_NAME, self::$WPDS_POST_TYPE);
        
        //Set our taxonomy's properties
        $taxAstrology->setSingularName(self::$WPDS_TAXONOMY_NAME);
        $taxAstrology->setPluralName(self::$WPDS_TAXONOMY_NAME);
        $taxAstrology->setMenuName(self::$WPDS_TAXONOMY_NAME);
        $taxAstrology->setLabels('Search '.self::$WPDS_POST_TYPE_NAME_PLURAL, 'Popular '.self::$WPDS_POST_TYPE_NAME_PLURAL, 'All '.self::$WPDS_POST_TYPE_NAME_PLURAL, 'Edit '.self::$WPDS_POST_TYPE_NAME, 'Update '.self::$WPDS_POST_TYPE_NAME, 'Add New '.self::$WPDS_POST_TYPE_NAME, 'New '.self::$WPDS_POST_TYPE_NAME.' Name');
        $taxAstrology->setDescription(self::$WPDS_POST_TYPE_NAME_PLURAL);
        $taxAstrology->setShowInMenu(true);
        $taxAstrology->setPublic(true);
        $taxAstrology->setHierarchical(false);
        
        //Finally, we register our new taxonomy
        $taxAstrology->register();
    }
    
    /**********************************************************************************
     * Creates our custom post type(s)
     * ********************************************************************************/
    protected static function initCustomPostType(){
        //Instantiate our custom post type object
        $cptWPDS = new PostType(self::$WPDS_POST_TYPE);
        
        //Set our custom post type properties
        $cptWPDS->setSingularName(self::$WPDS_POST_TYPE_NAME);
        $cptWPDS->setPluralName(self::$WPDS_POST_TYPE_NAME_PLURAL);
        $cptWPDS->setMenuName(self::$WPDS_POST_TYPE_NAME_PLURAL);
        $cptWPDS->setLabels('Add New', 'Add New '.self::$WPDS_POST_TYPE_NAME, 'Edit '.self::$WPDS_POST_TYPE_NAME, 'New '.self::$WPDS_POST_TYPE_NAME, 'All '.self::$WPDS_POST_TYPE_NAME_PLURAL, 'View '.self::$WPDS_POST_TYPE_NAME_PLURAL, 'Search '.self::$WPDS_POST_TYPE_NAME_PLURAL, 'No '.strtolower(self::$WPDS_POST_TYPE_NAME_PLURAL).' found', 'No '.strtolower(self::$WPDS_POST_TYPE_NAME_PLURAL).' found in the trash');
        $cptWPDS->setMenuIcon('dashicons-welcome-write-blog');
        $cptWPDS->setSlug(self::$WPDS_POST_TYPE);
        $cptWPDS->setShowInMenu(true);
        $cptWPDS->setPublic(true);
        $cptWPDS->setTaxonomies([self::$WPDS_POST_TYPE]);
        
        //Register custom post type
        $cptWPDS->register();
    }
}
