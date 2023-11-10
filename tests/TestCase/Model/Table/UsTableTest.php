<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UsTable Test Case
 */
class UsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\UsTable
     */
    protected $Us;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.Us',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Us') ? [] : ['className' => UsTable::class];
        $this->Us = $this->getTableLocator()->get('Us', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Us);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\UsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
