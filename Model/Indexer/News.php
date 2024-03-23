<?php
/**
 * Copyright (c) 2024 Hawksearch (www.hawksearch.com) - All Rights Reserved
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING
 * FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS
 * IN THE SOFTWARE.
 */
declare(strict_types=1);

namespace HawkSearch\NewsEntityExample\Model\Indexer;

use HawkSearch\EsIndexing\Model\Indexer\Entities as EntitiesIndexer;
use HawkSearch\EsIndexing\Model\Indexer\Entities\ActionAbstract as Action;
use Magento\Framework\Indexer\ActionInterface as IndexerActionInterface;
use Magento\Framework\Mview\ActionInterface as MviewActionInterface;
use Symfony\Component\Console\Output\ConsoleOutput;

class News implements IndexerActionInterface, MviewActionInterface
{
    /**
     * Indexer ID in configuration
     */
    const INDEXER_ID = 'hawksearch_news';

    /**
     * @var Action
     */
    private Action $action;

    /**
     * @var ConsoleOutput
     */
    private ConsoleOutput $output;

    /**
     * @param Action $action
     * @param ConsoleOutput $output
     */
    public function __construct(
        Action $action,
        ConsoleOutput $output
    ) {
        $this->action = $action;
        $this->output = $output;
    }

    /**
     * This indexer is not designed to run full reindex
     *
     * @see Entities
     * @inheritDoc
     */
    public function executeFull()
    {
        $this->output->writeln(
            sprintf(
                '<comment>Indexer `%s` can\'t be run for full reindexing. Please run `%s` indexer instead.</comment>',
                self::INDEXER_ID,
                EntitiesIndexer::INDEXER_ID
            )
        );
    }

    /**
     * @inheritdoc
     */
    public function executeList(array $ids)
    {
        $this->execute($ids);
    }

    /**
     * @inheritdoc
     */
    public function executeRow($id)
    {
        $this->execute([$id]);
    }

    /**
     * @inheritdoc
     */
    public function execute($ids)
    {
        $this->action->execute($ids);
    }
}
