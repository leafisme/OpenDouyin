<?php
/**
 * VideoCommentApiTest
 * PHP version 5
 *
 * @category Class
 * @package  Douyin\Open
 * @author   抖音小开
 */

namespace Douyin\Open;

use Douyin\Open\Configuration;
use Douyin\Open\ApiException;
use Douyin\Open\ObjectSerializer;

/**
 * VideoCommentApiTest Class Doc Comment
 *
 * @category Class
 * @author   抖音小开
 */
class VideoCommentApiTest extends \PHPUnit\Framework\TestCase
{
    protected $apiInstance;
    /**
     * Setup before running any test cases
     */
    public static function setUpBeforeClass()
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp()
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown()
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass()
    {
    }

    /**
     * Test case for videoCommentListGet
     *
     * 评论列表.
     *
     */
    public function testVideoCommentListGet()
    {
        $open_id = "ba253642-0590-40bc-9bdf-9a1334b94059"; // string | 通过/oauth/access_token/获取，用户唯一标志
$access_token = "act.1d1021d2aee3d41fee2d2add43456badMFZnrhFhfWotu3Ecuiuka27L56lr"; // string | 调用/oauth/access_token/生成的token，此token需要用户授权。
$count = 10; // int | 每页数量
$item_id = "item_id_example"; // string | 视频id
$cursor = 0; // int | 分页游标, 第一页请求cursor是0, response中会返回下一页请求用到的cursor, 同时response还会返回has_more来表明是否有更多的数据。

        try {
        $result = $this->apiInstance->videoCommentListGet($open_id, $access_token, $count, $item_id, $cursor);
            print_r($result);
        } catch (Exception $e) {
            echo 'Exception when calling VideoCommentApi->videoCommentListGet: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * Test case for videoCommentReplyListGet
     *
     * 评论回复列表.
     *
     */
    public function testVideoCommentReplyListGet()
    {
        $open_id = "ba253642-0590-40bc-9bdf-9a1334b94059"; // string | 通过/oauth/access_token/获取，用户唯一标志
$access_token = "act.1d1021d2aee3d41fee2d2add43456badMFZnrhFhfWotu3Ecuiuka27L56lr"; // string | 调用/oauth/access_token/生成的token，此token需要用户授权。
$count = 10; // int | 每页数量
$item_id = "item_id_example"; // string | 视频id
$comment_id = "comment_id_example"; // string | 评论id
$cursor = 0; // int | 分页游标, 第一页请求cursor是0, response中会返回下一页请求用到的cursor, 同时response还会返回has_more来表明是否有更多的数据。

        try {
        $result = $this->apiInstance->videoCommentReplyListGet($open_id, $access_token, $count, $item_id, $comment_id, $cursor);
            print_r($result);
        } catch (Exception $e) {
            echo 'Exception when calling VideoCommentApi->videoCommentReplyListGet: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * Test case for videoCommentReplyPost
     *
     * 回复视频评论.
     *
     */
    public function testVideoCommentReplyPost()
    {
        $open_id = "ba253642-0590-40bc-9bdf-9a1334b94059"; // string | 通过/oauth/access_token/获取，用户唯一标志
$access_token = "act.1d1021d2aee3d41fee2d2add43456badMFZnrhFhfWotu3Ecuiuka27L56lr"; // string | 调用/oauth/access_token/生成的token，此token需要用户授权。
$body = new \Douyin\Open\Model\VideoCommentReplyBody(); // \Douyin\Open\Model\VideoCommentReplyBody | 

        try {
        $result = $this->apiInstance->videoCommentReplyPost($open_id, $access_token, $body);
            print_r($result);
        } catch (Exception $e) {
            echo 'Exception when calling VideoCommentApi->videoCommentReplyPost: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * Test case for videoCommentTopPost
     *
     * 置顶视频评论(企业号).
     *
     */
    public function testVideoCommentTopPost()
    {
        $open_id = "ba253642-0590-40bc-9bdf-9a1334b94059"; // string | 通过/oauth/access_token/获取，用户唯一标志
$access_token = "act.1d1021d2aee3d41fee2d2add43456badMFZnrhFhfWotu3Ecuiuka27L56lr"; // string | 调用/oauth/access_token/生成的token，此token需要用户授权。
$body = new \Douyin\Open\Model\VideoCommentTopBody(); // \Douyin\Open\Model\VideoCommentTopBody | 

        try {
        $result = $this->apiInstance->videoCommentTopPost($open_id, $access_token, $body);
            print_r($result);
        } catch (Exception $e) {
            echo 'Exception when calling VideoCommentApi->videoCommentTopPost: ', $e->getMessage(), PHP_EOL;
        }
    }
}
