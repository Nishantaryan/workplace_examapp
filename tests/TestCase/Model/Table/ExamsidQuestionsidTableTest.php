<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ExamsidQuestionsidTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ExamsidQuestionsidTable Test Case
 */
class ExamsidQuestionsidTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ExamsidQuestionsidTable
     */
    public $ExamsidQuestionsid;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ExamsidQuestionsid',
        'app.Exams',
        'app.Questions'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ExamsidQuestionsid') ? [] : ['className' => ExamsidQuestionsidTable::class];
        $this->ExamsidQuestionsid = TableRegistry::getTableLocator()->get('ExamsidQuestionsid', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ExamsidQuestionsid);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
