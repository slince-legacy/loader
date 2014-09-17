<?php
/**
 * slince cache library
 * @author Taosikai <taosikai@yeah.net>
 */
namespace Slince\Loader\Loader;

class ClassMapLoader extends AbstractLoader
{

    /**
     * 类地址映射
     *
     * @var array
     */
    private $_classMap = [];

    /**
     * 设置映射
     *
     * @param string $class            
     * @param string $file            
     */
    function setClassMapping($class, $file)
    {
        $this->_classMap[$class] = $file;
    }

    /**
     * 获取映射
     *
     * @param string $class            
     */
    function getClassMapping($class)
    {
        return isset($this->_classMap[$class]) ? $this->_classMap[$class] : null;
    }

    /**
     * (non-PHPdoc)
     * 
     * @see \Slince\Loader\LoaderInterface::findFile()
     */
    function findFile($class)
    {
        if (isset($this->_classMap[$class])) {
            return $this->_classMap[$class];
        }
        return false;
    }
} 