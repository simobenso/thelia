<?php

namespace Thelia\Model\Map;

use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\InstancePoolTrait;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\DataFetcher\DataFetcherInterface;
use Propel\Runtime\Exception\PropelException;
use Propel\Runtime\Map\RelationMap;
use Propel\Runtime\Map\TableMap;
use Propel\Runtime\Map\TableMapTrait;
use Thelia\Model\Message;
use Thelia\Model\MessageQuery;

/**
 * This class defines the structure of the 'message' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class MessageTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;
    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'Thelia.Model.Map.MessageTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'thelia';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'message';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\Thelia\\Model\\Message';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'Thelia.Model.Message';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 12;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 12;

    /**
     * the column name for the ID field
     */
    const ID = 'message.ID';

    /**
     * the column name for the NAME field
     */
    const NAME = 'message.NAME';

    /**
     * the column name for the SECURED field
     */
    const SECURED = 'message.SECURED';

    /**
     * the column name for the TEXT_LAYOUT_FILE_NAME field
     */
    const TEXT_LAYOUT_FILE_NAME = 'message.TEXT_LAYOUT_FILE_NAME';

    /**
     * the column name for the TEXT_TEMPLATE_FILE_NAME field
     */
    const TEXT_TEMPLATE_FILE_NAME = 'message.TEXT_TEMPLATE_FILE_NAME';

    /**
     * the column name for the HTML_LAYOUT_FILE_NAME field
     */
    const HTML_LAYOUT_FILE_NAME = 'message.HTML_LAYOUT_FILE_NAME';

    /**
     * the column name for the HTML_TEMPLATE_FILE_NAME field
     */
    const HTML_TEMPLATE_FILE_NAME = 'message.HTML_TEMPLATE_FILE_NAME';

    /**
     * the column name for the CREATED_AT field
     */
    const CREATED_AT = 'message.CREATED_AT';

    /**
     * the column name for the UPDATED_AT field
     */
    const UPDATED_AT = 'message.UPDATED_AT';

    /**
     * the column name for the VERSION field
     */
    const VERSION = 'message.VERSION';

    /**
     * the column name for the VERSION_CREATED_AT field
     */
    const VERSION_CREATED_AT = 'message.VERSION_CREATED_AT';

    /**
     * the column name for the VERSION_CREATED_BY field
     */
    const VERSION_CREATED_BY = 'message.VERSION_CREATED_BY';

    /**
     * The default string format for model objects of the related table
     */
    const DEFAULT_STRING_FORMAT = 'YAML';

    // i18n behavior

    /**
     * The default locale to use for translations.
     *
     * @var string
     */
    const DEFAULT_LOCALE = 'en_US';

    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        self::TYPE_PHPNAME       => array('Id', 'Name', 'Secured', 'TextLayoutFileName', 'TextTemplateFileName', 'HtmlLayoutFileName', 'HtmlTemplateFileName', 'CreatedAt', 'UpdatedAt', 'Version', 'VersionCreatedAt', 'VersionCreatedBy', ),
        self::TYPE_STUDLYPHPNAME => array('id', 'name', 'secured', 'textLayoutFileName', 'textTemplateFileName', 'htmlLayoutFileName', 'htmlTemplateFileName', 'createdAt', 'updatedAt', 'version', 'versionCreatedAt', 'versionCreatedBy', ),
        self::TYPE_COLNAME       => array(MessageTableMap::ID, MessageTableMap::NAME, MessageTableMap::SECURED, MessageTableMap::TEXT_LAYOUT_FILE_NAME, MessageTableMap::TEXT_TEMPLATE_FILE_NAME, MessageTableMap::HTML_LAYOUT_FILE_NAME, MessageTableMap::HTML_TEMPLATE_FILE_NAME, MessageTableMap::CREATED_AT, MessageTableMap::UPDATED_AT, MessageTableMap::VERSION, MessageTableMap::VERSION_CREATED_AT, MessageTableMap::VERSION_CREATED_BY, ),
        self::TYPE_RAW_COLNAME   => array('ID', 'NAME', 'SECURED', 'TEXT_LAYOUT_FILE_NAME', 'TEXT_TEMPLATE_FILE_NAME', 'HTML_LAYOUT_FILE_NAME', 'HTML_TEMPLATE_FILE_NAME', 'CREATED_AT', 'UPDATED_AT', 'VERSION', 'VERSION_CREATED_AT', 'VERSION_CREATED_BY', ),
        self::TYPE_FIELDNAME     => array('id', 'name', 'secured', 'text_layout_file_name', 'text_template_file_name', 'html_layout_file_name', 'html_template_file_name', 'created_at', 'updated_at', 'version', 'version_created_at', 'version_created_by', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Id' => 0, 'Name' => 1, 'Secured' => 2, 'TextLayoutFileName' => 3, 'TextTemplateFileName' => 4, 'HtmlLayoutFileName' => 5, 'HtmlTemplateFileName' => 6, 'CreatedAt' => 7, 'UpdatedAt' => 8, 'Version' => 9, 'VersionCreatedAt' => 10, 'VersionCreatedBy' => 11, ),
        self::TYPE_STUDLYPHPNAME => array('id' => 0, 'name' => 1, 'secured' => 2, 'textLayoutFileName' => 3, 'textTemplateFileName' => 4, 'htmlLayoutFileName' => 5, 'htmlTemplateFileName' => 6, 'createdAt' => 7, 'updatedAt' => 8, 'version' => 9, 'versionCreatedAt' => 10, 'versionCreatedBy' => 11, ),
        self::TYPE_COLNAME       => array(MessageTableMap::ID => 0, MessageTableMap::NAME => 1, MessageTableMap::SECURED => 2, MessageTableMap::TEXT_LAYOUT_FILE_NAME => 3, MessageTableMap::TEXT_TEMPLATE_FILE_NAME => 4, MessageTableMap::HTML_LAYOUT_FILE_NAME => 5, MessageTableMap::HTML_TEMPLATE_FILE_NAME => 6, MessageTableMap::CREATED_AT => 7, MessageTableMap::UPDATED_AT => 8, MessageTableMap::VERSION => 9, MessageTableMap::VERSION_CREATED_AT => 10, MessageTableMap::VERSION_CREATED_BY => 11, ),
        self::TYPE_RAW_COLNAME   => array('ID' => 0, 'NAME' => 1, 'SECURED' => 2, 'TEXT_LAYOUT_FILE_NAME' => 3, 'TEXT_TEMPLATE_FILE_NAME' => 4, 'HTML_LAYOUT_FILE_NAME' => 5, 'HTML_TEMPLATE_FILE_NAME' => 6, 'CREATED_AT' => 7, 'UPDATED_AT' => 8, 'VERSION' => 9, 'VERSION_CREATED_AT' => 10, 'VERSION_CREATED_BY' => 11, ),
        self::TYPE_FIELDNAME     => array('id' => 0, 'name' => 1, 'secured' => 2, 'text_layout_file_name' => 3, 'text_template_file_name' => 4, 'html_layout_file_name' => 5, 'html_template_file_name' => 6, 'created_at' => 7, 'updated_at' => 8, 'version' => 9, 'version_created_at' => 10, 'version_created_by' => 11, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, )
    );

    /**
     * Initialize the table attributes and columns
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws PropelException
     */
    public function initialize()
    {
        // attributes
        $this->setName('message');
        $this->setPhpName('Message');
        $this->setClassName('\\Thelia\\Model\\Message');
        $this->setPackage('Thelia.Model');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('NAME', 'Name', 'VARCHAR', true, 255, null);
        $this->addColumn('SECURED', 'Secured', 'TINYINT', false, null, null);
        $this->addColumn('TEXT_LAYOUT_FILE_NAME', 'TextLayoutFileName', 'VARCHAR', false, 255, null);
        $this->addColumn('TEXT_TEMPLATE_FILE_NAME', 'TextTemplateFileName', 'VARCHAR', false, 255, null);
        $this->addColumn('HTML_LAYOUT_FILE_NAME', 'HtmlLayoutFileName', 'VARCHAR', false, 255, null);
        $this->addColumn('HTML_TEMPLATE_FILE_NAME', 'HtmlTemplateFileName', 'VARCHAR', false, 255, null);
        $this->addColumn('CREATED_AT', 'CreatedAt', 'TIMESTAMP', false, null, null);
        $this->addColumn('UPDATED_AT', 'UpdatedAt', 'TIMESTAMP', false, null, null);
        $this->addColumn('VERSION', 'Version', 'INTEGER', false, null, 0);
        $this->addColumn('VERSION_CREATED_AT', 'VersionCreatedAt', 'TIMESTAMP', false, null, null);
        $this->addColumn('VERSION_CREATED_BY', 'VersionCreatedBy', 'VARCHAR', false, 100, null);
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('MessageI18n', '\\Thelia\\Model\\MessageI18n', RelationMap::ONE_TO_MANY, array('id' => 'id', ), 'CASCADE', null, 'MessageI18ns');
        $this->addRelation('MessageVersion', '\\Thelia\\Model\\MessageVersion', RelationMap::ONE_TO_MANY, array('id' => 'id', ), 'CASCADE', null, 'MessageVersions');
    } // buildRelations()

    /**
     *
     * Gets the list of behaviors registered for this table
     *
     * @return array Associative array (name => parameters) of behaviors
     */
    public function getBehaviors()
    {
        return array(
            'timestampable' => array('create_column' => 'created_at', 'update_column' => 'updated_at', ),
            'i18n' => array('i18n_table' => '%TABLE%_i18n', 'i18n_phpname' => '%PHPNAME%I18n', 'i18n_columns' => 'title, subject, text_message, html_message', 'locale_column' => 'locale', 'locale_length' => '5', 'default_locale' => '', 'locale_alias' => '', ),
            'versionable' => array('version_column' => 'version', 'version_table' => '', 'log_created_at' => 'true', 'log_created_by' => 'true', 'log_comment' => 'false', 'version_created_at_column' => 'version_created_at', 'version_created_by_column' => 'version_created_by', 'version_comment_column' => 'version_comment', ),
        );
    } // getBehaviors()
    /**
     * Method to invalidate the instance pool of all tables related to message     * by a foreign key with ON DELETE CASCADE
     */
    public static function clearRelatedInstancePool()
    {
        // Invalidate objects in ".$this->getClassNameFromBuilder($joinedTableTableMapBuilder)." instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
                MessageI18nTableMap::clearInstancePool();
                MessageVersionTableMap::clearInstancePool();
            }

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param array  $row       resultset row.
     * @param int    $offset    The 0-based offset for reading from the resultset row.
     * @param string $indexType One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_STUDLYPHPNAME
     *                          TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM
     */
    public static function getPrimaryKeyHashFromRow($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        // If the PK cannot be derived from the row, return NULL.
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)];
    }

    /**
     * Retrieves the primary key from the DB resultset row
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, an array of the primary key columns will be returned.
     *
     * @param array  $row       resultset row.
     * @param int    $offset    The 0-based offset for reading from the resultset row.
     * @param string $indexType One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_STUDLYPHPNAME
     *                          TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM
     *
     * @return mixed The primary key of the row
     */
    public static function getPrimaryKeyFromRow($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
            return (int) $row[
                            $indexType == TableMap::TYPE_NUM
                            ? 0 + $offset
                            : self::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)
                        ];
    }

    /**
     * The class that the tableMap will make instances of.
     *
     * If $withPrefix is true, the returned path
     * uses a dot-path notation which is translated into a path
     * relative to a location on the PHP include_path.
     * (e.g. path.to.MyClass -> 'path/to/MyClass.php')
     *
     * @param  boolean $withPrefix Whether or not to return the path with the class name
     * @return string  path.to.ClassName
     */
    public static function getOMClass($withPrefix = true)
    {
        return $withPrefix ? MessageTableMap::CLASS_DEFAULT : MessageTableMap::OM_CLASS;
    }

    /**
     * Populates an object of the default type or an object that inherit from the default.
     *
     * @param array  $row       row returned by DataFetcher->fetch().
     * @param int    $offset    The 0-based offset for reading from the resultset row.
     * @param string $indexType The index type of $row. Mostly DataFetcher->getIndexType().
                                 One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_STUDLYPHPNAME
     *                           TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     *
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     * @return array           (Message object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = MessageTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = MessageTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + MessageTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = MessageTableMap::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            MessageTableMap::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }

    /**
     * The returned array will contain objects of the default type or
     * objects that inherit from the default.
     *
     * @param  DataFetcherInterface $dataFetcher
     * @return array
     * @throws PropelException      Any exceptions caught during processing will be
     *                                          rethrown wrapped into a PropelException.
     */
    public static function populateObjects(DataFetcherInterface $dataFetcher)
    {
        $results = array();

        // set the class once to avoid overhead in the loop
        $cls = static::getOMClass(false);
        // populate the object(s)
        while ($row = $dataFetcher->fetch()) {
            $key = MessageTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = MessageTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                MessageTableMap::addInstanceToPool($obj, $key);
            } // if key exists
        }

        return $results;
    }
    /**
     * Add all the columns needed to create a new object.
     *
     * Note: any columns that were marked with lazyLoad="true" in the
     * XML schema will not be added to the select list and only loaded
     * on demand.
     *
     * @param  Criteria        $criteria object containing the columns to add.
     * @param  string          $alias    optional table alias
     * @throws PropelException Any exceptions caught during processing will be
     *                                  rethrown wrapped into a PropelException.
     */
    public static function addSelectColumns(Criteria $criteria, $alias = null)
    {
        if (null === $alias) {
            $criteria->addSelectColumn(MessageTableMap::ID);
            $criteria->addSelectColumn(MessageTableMap::NAME);
            $criteria->addSelectColumn(MessageTableMap::SECURED);
            $criteria->addSelectColumn(MessageTableMap::TEXT_LAYOUT_FILE_NAME);
            $criteria->addSelectColumn(MessageTableMap::TEXT_TEMPLATE_FILE_NAME);
            $criteria->addSelectColumn(MessageTableMap::HTML_LAYOUT_FILE_NAME);
            $criteria->addSelectColumn(MessageTableMap::HTML_TEMPLATE_FILE_NAME);
            $criteria->addSelectColumn(MessageTableMap::CREATED_AT);
            $criteria->addSelectColumn(MessageTableMap::UPDATED_AT);
            $criteria->addSelectColumn(MessageTableMap::VERSION);
            $criteria->addSelectColumn(MessageTableMap::VERSION_CREATED_AT);
            $criteria->addSelectColumn(MessageTableMap::VERSION_CREATED_BY);
        } else {
            $criteria->addSelectColumn($alias . '.ID');
            $criteria->addSelectColumn($alias . '.NAME');
            $criteria->addSelectColumn($alias . '.SECURED');
            $criteria->addSelectColumn($alias . '.TEXT_LAYOUT_FILE_NAME');
            $criteria->addSelectColumn($alias . '.TEXT_TEMPLATE_FILE_NAME');
            $criteria->addSelectColumn($alias . '.HTML_LAYOUT_FILE_NAME');
            $criteria->addSelectColumn($alias . '.HTML_TEMPLATE_FILE_NAME');
            $criteria->addSelectColumn($alias . '.CREATED_AT');
            $criteria->addSelectColumn($alias . '.UPDATED_AT');
            $criteria->addSelectColumn($alias . '.VERSION');
            $criteria->addSelectColumn($alias . '.VERSION_CREATED_AT');
            $criteria->addSelectColumn($alias . '.VERSION_CREATED_BY');
        }
    }

    /**
     * Returns the TableMap related to this object.
     * This method is not needed for general use but a specific application could have a need.
     * @return TableMap
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function getTableMap()
    {
        return Propel::getServiceContainer()->getDatabaseMap(MessageTableMap::DATABASE_NAME)->getTable(MessageTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getServiceContainer()->getDatabaseMap(MessageTableMap::DATABASE_NAME);
      if (!$dbMap->hasTable(MessageTableMap::TABLE_NAME)) {
        $dbMap->addTableObject(new MessageTableMap());
      }
    }

    /**
     * Performs a DELETE on the database, given a Message or Criteria object OR a primary key value.
     *
     * @param  mixed               $values Criteria or Message object or primary key or array of primary keys
     *                                     which is used to create the DELETE statement
     * @param  ConnectionInterface $con    the connection to use
     * @return int                 The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *                                    if supported by native driver or if emulated using Propel.
     * @throws PropelException     Any exceptions caught during processing will be
     *                                    rethrown wrapped into a PropelException.
     */
     public static function doDelete($values, ConnectionInterface $con = null)
     {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(MessageTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \Thelia\Model\Message) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(MessageTableMap::DATABASE_NAME);
            $criteria->add(MessageTableMap::ID, (array) $values, Criteria::IN);
        }

        $query = MessageQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) { MessageTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) { MessageTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the message table.
     *
     * @param  ConnectionInterface $con the connection to use
     * @return int                 The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return MessageQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a Message or Criteria object.
     *
     * @param  mixed               $criteria Criteria or Message object containing data that is used to create the INSERT statement.
     * @param  ConnectionInterface $con      the ConnectionInterface connection to use
     * @return mixed               The new primary key.
     * @throws PropelException     Any exceptions caught during processing will be
     *                                      rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(MessageTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from Message object
        }

        if ($criteria->containsKey(MessageTableMap::ID) && $criteria->keyContainsValue(MessageTableMap::ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.MessageTableMap::ID.')');
        }

        // Set the correct dbName
        $query = MessageQuery::create()->mergeWith($criteria);

        try {
            // use transaction because $criteria could contain info
            // for more than one table (I guess, conceivably)
            $con->beginTransaction();
            $pk = $query->doInsert($con);
            $con->commit();
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }

        return $pk;
    }

} // MessageTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
MessageTableMap::buildTableMap();
