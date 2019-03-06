<?php
/**
 * Created by PhpStorm.
 * User: Vit Dolinek
 * Date: 6.3.19
 * Time: 7:51
 */

namespace Prefixes\Database\Table;


use Nette\Database\Table\GroupedSelection;
use Nette\Database\Table\IRow;
use Nette\Database\Table\Selection;
use Nette\MemberAccessException;
use Nette\Utils\Strings;

class ActiveRow implements IRow
{
    /**
     * @var array
     */
    private $data;
    /**
     * @var Selection
     */
    private $table;
    /**
     * @var string
     */
    private $prefix;

    /**
     * ActiveRow constructor.
     * @param string $prefix
     * @param array $data
     * @param Selection $table
     */
    public function __construct(string $prefix, array $data, Selection $table)
    {
        $this->data     = $data;
        $this->table    = $table;
        $this->prefix   = $prefix;
    }


    /**
     * Whether a offset exists
     * @link https://php.net/manual/en/arrayaccess.offsetexists.php
     * @param mixed $offset <p>
     * An offset to check for.
     * </p>
     * @return boolean true on success or false on failure.
     * </p>
     * <p>
     * The return value will be casted to boolean if non-boolean was returned.
     * @since 5.0.0
     */
    public function offsetExists($offset)
    {
        // TODO: Implement offsetExists() method.
    }

    /**
     * Offset to retrieve
     * @link https://php.net/manual/en/arrayaccess.offsetget.php
     * @param mixed $offset <p>
     * The offset to retrieve.
     * </p>
     * @return mixed Can return all value types.
     * @since 5.0.0
     */
    public function offsetGet($offset)
    {
        // TODO: Implement offsetGet() method.
    }

    /**
     * Offset to set
     * @link https://php.net/manual/en/arrayaccess.offsetset.php
     * @param mixed $offset <p>
     * The offset to assign the value to.
     * </p>
     * @param mixed $value <p>
     * The value to set.
     * </p>
     * @return void
     * @since 5.0.0
     */
    public function offsetSet($offset, $value)
    {
        // TODO: Implement offsetSet() method.
    }

    /**
     * Offset to unset
     * @link https://php.net/manual/en/arrayaccess.offsetunset.php
     * @param mixed $offset <p>
     * The offset to unset.
     * </p>
     * @return void
     * @since 5.0.0
     */
    public function offsetUnset($offset)
    {
        // TODO: Implement offsetUnset() method.
    }

    public function setTable(Selection $name)
    {
        // TODO: Implement setTable() method.
    }

    public function getTable(): Selection
    {
        // TODO: Implement getTable() method.
    }

    /**
     * Returns primary key value.
     * @return mixed
     */
    public function getPrimary(bool $throw = true)
    {
        // TODO: Implement getPrimary() method.
    }

    /**
     * Returns row signature (composition of primary keys)
     */
    public function getSignature(bool $throw = true): string
    {
        // TODO: Implement getSignature() method.
    }

    /**
     * Returns referencing rows.
     */
    public function related(string $key, string $throughColumn = null): GroupedSelection
    {
        $groupedSelection = $this->table->getReferencingTable($this->prefix . $key, $throughColumn, $this[$this->table->getPrimary()]);
        if (!$groupedSelection) {
            throw new MemberAccessException("No reference found for \${$this->table->getName()}->related($key).");
        }

        return $groupedSelection;
    }

    /**
     * Returns referenced row.
     */
    function ref(string $key, string $throughColumn = null): ?self
    {
        // TODO: Implement ref() method.
    }
}