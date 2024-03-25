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

namespace HawkSearch\NewsEntityExample\Model\Indexing\Entity\News;

use HawkSearch\EsIndexing\Model\Indexing\AbstractEntityRebuild;
use Magento\Framework\DataObject;

class EntityRebuild extends AbstractEntityRebuild
{
    /**
     * @inheritDoc
     */
    protected function isAllowedItem(DataObject $item): bool
    {
        return true;
    }

    /**
     * @inheritDoc
     */
    protected function getEntityId(DataObject $entityItem): ?int
    {
        return (int)$entityItem->getNewsId();
    }

    /**
     * @inheritDoc
     */
    protected function getIndexedAttributes(DataObject $item = null): array
    {
        return [];
    }
}
