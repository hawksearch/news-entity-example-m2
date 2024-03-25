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

use HawkSearch\EsIndexing\Model\Indexing\ItemsDataProviderInterface;
use Magento\Framework\DataObject;
use Magento\Framework\DataObject\Factory as DataObjectFactory;

class ItemsDataProvider implements ItemsDataProviderInterface
{
    /**
     * @var DataObjectFactory
     */
    private DataObjectFactory $dataObjectFactory;

    public function __construct(DataObjectFactory $dataObjectFactory)
    {
        $this->dataObjectFactory = $dataObjectFactory;
    }

    /**
     * @inheritDoc
     * @return DataObject[]
     */
    public function getItems(int $storeId, $entityIds = null, $currentPage = 1, $pageSize = 0)
    {
        /*
         * Use real entity source to extract data content instead of dummy data array
         */
        $news = [
            [
                'news_id' => 1,
                'title' => 'Boost is bodies dealing',
                'excerpt' => 'Of Founder experts by Polymatech display of regard $110 the design boost is bodies dealing of increased',
                'content' => 'Of Founder experts by Polymatech display of regard $110 the design boost is bodies dealing of increased than is scheme approved. Rs this major the also growth of December bodies the design semiconductor? Rao 76000 76000 g country December the increased force was boost approved and country $110 $55 growth other the allocated force? Do about only the Eswara industry’s of growth industry! Are only chip in exclusively government to percent this CEO $110 moment in scheme boost but Micron’s 202324 to $110 force. It amount Nandam but this this g about bodies of considered more is approved 2026 in 6903 India.',
                'url' => 'https://example.com/article1',
                'created_at' => '2024-03-21 13:10:00',
                'published_at' => '2024-03-22',
            ],
            [
                'news_id' => 2,
                'title' => 'Application by scheme Founder',
                'excerpt' => 'The dealing 3000 end such crore and this application by scheme Founder in semiconductor finance to force 76000 the chip spoke.',
                'content' => 'The dealing 3000 end such crore and this application by scheme Founder in semiconductor finance to force 76000 the chip spoke. But regards this to industry billion the such increased be spoke nations Rs Micron’s various. $55 industry 76000 the proposals billion was $110 this of considered display. G exclusively boost the 2026 move end Crore Crore but industry’s skilled in growth than the approved semiconductor are spoke equipment. Is scheme India CEO allocated various g $110 billion.',
                'url' => 'https://example.com/article2',
                'created_at' => '2024-03-21 13:10:00',
                'published_at' => '2024-03-22',
            ],
            [
                'news_id' => 3,
                'title' => 'The industry 6903',
                'excerpt' => 'Is challenges looking all also feel and budget manufacturing.',
                'content' => 'Is challenges looking all also feel and budget manufacturing. Of force incentive to skilled this be percent bodies of semiconductor design all incentive manufacturing the industry session was looking Eswara? The boost semiconductor of nations billion are with been. And than manufacturing the other feel of spoke more. The industry 6903 of back Crore the Crore also end exclusively industry. By being than Rs bodies back the Polymatech chip is industry’s allocated is various country to amount skilled the skilled apart.',
                'url' => 'https://example.com/article3',
                'created_at' => '2024-03-21 13:10:00',
                'published_at' => '2024-03-22',
            ],
            [
                'news_id' => 4,
                'title' => 'Various equipment',
                'excerpt' => 'In session labor for display incentive we India crore.',
                'content' => 'In session labor for display incentive we India crore. And feel industry’s Rs government industry 200 various equipment the industry 2026 is from allocated. Of equipment India of more with the Crore effort is 2026 this it various December $55 Crore being. $55 display effort and effort from of Crore apart. In 2026 December the this incentive be other with and crore year the mostly chip as allocated Founder by approved skilled. The this minister to looking India for December budget.',
                'url' => 'https://example.com/article4',
                'created_at' => '2024-03-21 13:10:00',
                'published_at' => '2024-03-22',
            ],
            [
                'news_id' => 5,
                'title' => 'Government by 2021 speaking',
                'excerpt' => 'Of this 3000 and needs Polymatech but regards regard!',
                'content' => 'Of this 3000 and needs Polymatech but regards regard! And growth $110 Rs major Nandam end Nandam been $55 effort government by 2021 speaking. Of industry bodies is industry manufacturing to billion nations g industry’s approved. For with that to Founder application and effort imported the 202324 this. Of 2021 manufacturing is chip effort the industry’s with Rao this only to rest this. The feel than yet bodies semiconductor be Crore display. Has 6903 being to rest skilled the spoke Eswara the spoke feel!',
                'url' => 'https://example.com/article5',
                'created_at' => '2024-03-21 13:10:00',
                'published_at' => '2024-03-22',
            ],
            [
                'news_id' => 6,
                'title' => 'Giant Robots Invade Tokyo',
                'excerpt' => 'Massive mechanical beings seen stomping through the city streets.',
                'content' => 'Reports flooded in as citizens witnessed towering robots destroying buildings...',
                'url' => 'https://example.com/article6',
                'created_at' => '2024-03-21 13:10:00',
                'published_at' => '2024-03-22',
            ],
            [
                'news_id' => 7,
                'title' => 'Chocolate Rain Hits Europe',
                'excerpt' => 'Sweet showers surprise residents, coating streets in cocoa goodness.',
                'content' => 'Europeans were amazed as a rare weather event showered them with chocolate rain...',
                'url' => 'https://example.com/article7',
                'created_at' => '2024-03-21 13:10:00',
                'published_at' => '2024-03-22',
            ],
            [
                'news_id' => 8,
                'title' => 'Ancient Pyramids Discovered in Antarctica',
                'excerpt' => 'Archaeologists uncover mysterious structures buried in the icy continent.',
                'content' => 'Experts puzzled by the presence of pyramid-like formations deep beneath Antarctic ice shelves...',
                'url' => 'https://example.com/article8',
                'created_at' => '2024-03-21 13:10:00',
                'published_at' => '2024-03-22',
            ],
            [
                'news_id' => 9,
                'title' => 'Unicorns Spotted on Mars',
                'excerpt' => 'NASA rover captures images of mythical creatures on the red planet.',
                'content' => 'Astrobiologists stunned by the discovery of what appear to be unicorn-like creatures roaming Mars...',
                'url' => 'https://example.com/article8',
                'created_at' => '2024-03-21 13:10:00',
                'published_at' => '2024-03-22',
            ],
        ];

        $result = [];
        foreach ($news as $newsPiece) {
            $result[] = $this->dataObjectFactory->create($newsPiece);
        }

        return $result;
    }
}
