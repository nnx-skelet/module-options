<?php
/**
 * @link  https://github.com/nnx-framework/module-options
 * @author  Malofeykin Andrey  <and-rey2@yandex.ru>
 */
namespace Nnx\ModuleOptions\PhpUnit\TestData;

/**
 * Class TestPaths
 *
 * @package Nnx\ModuleOptions\PhpUnit\TestData
 */
class TestPaths
{
    /**
     * Путь до директории модуля
     *
     * @return string
     */
    public static function getPathToModule()
    {
        return __DIR__ . '/../../../';
    }

    /**
     * Путь до конфига приложения по умолчанию
     */
    public static function getPathToDefaultAppConfig()
    {
        return  __DIR__ . '/../_files/DefaultApp/application.config.php';
    }


    /**
     * Путь до конфига приложения в котором тестируется получение OptionsByModuleTest
     */
    public static function getPathToOptionsByModuleTestAppConfig()
    {
        return  __DIR__ . '/../_files/OptionsByModuleTest/application.config.php';
    }


    /**
     * Путь до директории приложения в котором находятся тествовые модулия для проверки получения оп
     */
    public static function getPathToOptionsByModuleTestAppModuleDir()
    {
        return  __DIR__ . '/../_files/OptionsByModuleTest/module/';
    }

    /**
     * Путь до дириктории приложения в котором находится тестовые модуля для проверки работы абстрактной фабрики, для
     * создания ModuleOptions
     *
     * @return string
     */
    public static function getPathToDefaultModuleOptionsAbstractFactoryAppModuleDir()
    {
        return  __DIR__ . '/../_files/DefaultModuleOptionsAbstractFactory/module/';
    }

    /**
     * Путь до конфига приложения исполььзуемого для проверки работы абстрактной фабрики, создающей ModuleOptions
     */
    public static function getPathToDefaultModuleOptionsAbstractFactoryAppConfig()
    {
        return  __DIR__ . '/../_files/DefaultModuleOptionsAbstractFactory/application.config.php';
    }
}
