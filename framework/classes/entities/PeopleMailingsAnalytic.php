<?php
namespace CASHMusic\Entities;


use Doctrine\ORM\Mapping as ORM;

/**
 * PeopleMailingsAnalytics
 *
 * @Table(name="people_mailings_analytics")
 * @Entity
 */
class PeopleMailingsAnalytic extends EntityBase
{

    protected $fillable = ['mailing_id','sends','opens_total','opens_unique','opens_mobile','opens_country','opens_ids','clicks','clicks_urls','failures'];
    /**
     * @var integer
     *
     * @Column(name="mailing_id", type="integer", nullable=false)
     */
    protected $mailing_id = '0';

    /**
     * @var integer
     *
     * @Column(name="sends", type="integer", nullable=true)
     */
    protected $sends = '0';

    /**
     * @var integer
     *
     * @Column(name="opens_total", type="integer", nullable=true)
     */
    protected $opens_total = '0';

    /**
     * @var integer
     *
     * @Column(name="opens_unique", type="integer", nullable=true)
     */
    protected $opens_unique = '0';

    /**
     * @var integer
     *
     * @Column(name="opens_mobile", type="integer", nullable=true)
     */
    protected $opens_mobile = '0';

    /**
     * @var string
     *
     * @Column(name="opens_country", type="text", length=16777215, nullable=true)
     */
    protected $opens_country;

    /**
     * @var string
     *
     * @Column(name="opens_ids", type="text", length=16777215, nullable=true)
     */
    protected $opens_ids;

    /**
     * @var integer
     *
     * @Column(name="clicks", type="integer", nullable=true)
     */
    protected $clicks = '0';

    /**
     * @var string
     *
     * @Column(name="clicks_urls", type="text", length=65535, nullable=true)
     */
    protected $clicks_urls;

    /**
     * @var integer
     *
     * @Column(name="failures", type="integer", nullable=true)
     */
    protected $failures = '0';

    /**
     * @var integer
     *
     * @Column(name="creation_date", type="integer", nullable=true)
     */
    protected $creation_date;

    /**
     * @var integer
     *
     * @Column(name="modification_date", type="integer", nullable=true)
     */
    protected $modification_date = '0';

    /** @Id @Column(type="integer") @GeneratedValue(strategy="AUTO") **/
    protected $id;

}
