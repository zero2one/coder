<?php

namespace Drupal\Test\InfoFiles;

use Drupal\Test\CoderSniffUnitTest;

/**
 * A sniff unit test checks a .inc file for expected violations of a single
 * coding standard. Expected errors and warnings are stored in this class.
 */
class AutoAddedKeysUnitTest extends CoderSniffUnitTest
{


    /**
     * Returns the lines where errors should occur.
     *
     * The key of the array should represent the line number and the value
     * should represent the number of errors that should occur on that line.
     *
     * @param string $testFile The name of the file being tested.
     *
     * @return array<int, int>
     */
    protected function getErrorList(string $testFile): array
    {
        return [];

    }//end getErrorList()


    /**
     * Returns the lines where warnings should occur.
     *
     * The key of the array should represent the line number and the value
     * should represent the number of warnings that should occur on that line.
     *
     * @param string $testFile The name of the file being tested.
     *
     * @return array<int, int>
     */
    protected function getWarningList(string $testFile): array
    {
        return [1 => 3];

    }//end getWarningList()


    /**
     * Returns a list of test files that should be checked.
     *
     * @param string $testFileBase The base path that the unit tests files will have.
     *
     * @return array<string>
     */
    protected function getTestFiles($testFileBase): array
    {
        return [
            __DIR__.'/drupal7/test.info',
            __DIR__.'/drupal8/test.info.yml',
        ];

    }//end getTestFiles()


}//end class
