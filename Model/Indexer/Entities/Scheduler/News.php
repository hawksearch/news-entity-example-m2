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

namespace HawkSearch\NewsEntityExample\Model\Indexer\Entities\Scheduler;

use HawkSearch\EsIndexing\Model\Indexer\Entities\SchedulerAbstract;
use HawkSearch\EsIndexing\Model\MessageQueue\MessageManagerInterface;
use HawkSearch\EsIndexing\Model\MessageQueue\MessageTopicResolverInterface;
use HawkSearch\NewsEntityExample\Model\Indexing\EntityType\NewsEntityType;
use Magento\Framework\Api\SearchCriteriaBuilder;
use Magento\Framework\Event\ManagerInterface as EventManagerInterface;
use Magento\Store\Api\Data\StoreInterface;

/**
 * @todo Remove this class after implementing NewsEntityType
 * @see NewsEntityType
 */
class News extends SchedulerAbstract
{
    public function __construct(
        EventManagerInterface $eventManager,
        SearchCriteriaBuilder $searchCriteriaBuilder,
        NewsEntityType $entityType,
        MessageManagerInterface $messageManager,
        MessageTopicResolverInterface $messageTopicResolver
    )
    {
        parent::__construct(
            $eventManager,
            $searchCriteriaBuilder,
            $entityType,
            $messageManager,
            $messageTopicResolver
        );
    }

    /**
     * @inheritDoc
     */
    public function schedule(StoreInterface $store, ?array $ids = null)
    {
        // empty stub
    }
}
