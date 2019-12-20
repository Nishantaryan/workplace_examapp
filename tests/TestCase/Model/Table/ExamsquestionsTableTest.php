<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ExamsQuestionsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ExamsQuestionsTable Test Case
 */
class ExamsQuestionsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ExamsQuestionsTable
     */
    public $ExamsQuestions;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ExamsQuestions',
        'app.Exams',
        'app.Questions',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ExamsQuestions') ? [] : ['className' => ExamsQuestionsTable::class];
        $this->ExamsQuestions = TableRegistry::getTableLocator()->get('ExamsQuestions', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ExamsQuestions);

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
