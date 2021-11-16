<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\AppleEee
 *
 * @property int $id
 * @property int $spare_id
 * @property string $eee
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\AppleEee whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\AppleEee whereEee($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\AppleEee whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\AppleEee whereSpareId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\AppleEee whereUpdatedAt($value)
 * @mixin \Eloquent
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\AppleEee newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\AppleEee newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\AppleEee query()
 */
	class AppleEee extends \Eloquent {}
}

namespace App\Models\Base{
/**
 * Class AppleEee
 *
 * @property int $id
 * @property int $spare_id
 * @property string $eee
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @package App\Models\Base
 * @method static \Illuminate\Database\Eloquent\Builder|AppleEee newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AppleEee newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AppleEee query()
 * @method static \Illuminate\Database\Eloquent\Builder|AppleEee whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AppleEee whereEee($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AppleEee whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AppleEee whereSpareId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AppleEee whereUpdatedAt($value)
 */
	class AppleEee extends \Eloquent {}
}

namespace App\Models\Base{
/**
 * Class CallType
 *
 * @property int $id
 * @property string $type
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @package App\Models\Base
 * @method static \Illuminate\Database\Eloquent\Builder|CallType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CallType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CallType query()
 * @method static \Illuminate\Database\Eloquent\Builder|CallType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CallType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CallType whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CallType whereUpdatedAt($value)
 */
	class CallType extends \Eloquent {}
}

namespace App\Models\Base{
/**
 * Class ClosingReason
 *
 * @property int $id
 * @property string $reason
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @package App\Models\Base
 * @method static \Illuminate\Database\Eloquent\Builder|ClosingReason newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ClosingReason newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ClosingReason query()
 * @method static \Illuminate\Database\Eloquent\Builder|ClosingReason whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClosingReason whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClosingReason whereReason($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClosingReason whereUpdatedAt($value)
 */
	class ClosingReason extends \Eloquent {}
}

namespace App\Models\Base{
/**
 * Class CrossCharge
 *
 * @property int $id
 * @property int $service_order
 * @property string $serial
 * @property string $cost_centre
 * @property string $cost_element
 * @property float $amount
 * @property string $text
 * @property int $charged
 * @property \Carbon\Carbon $charged_date
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property int $repair_id
 * @package App\Models\Base
 * @method static \Illuminate\Database\Eloquent\Builder|CrossCharge newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CrossCharge newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CrossCharge query()
 * @method static \Illuminate\Database\Eloquent\Builder|CrossCharge whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CrossCharge whereCharged($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CrossCharge whereChargedDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CrossCharge whereCostCentre($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CrossCharge whereCostElement($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CrossCharge whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CrossCharge whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CrossCharge whereRepairId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CrossCharge whereSerial($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CrossCharge whereServiceOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CrossCharge whereText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CrossCharge whereUpdatedAt($value)
 */
	class CrossCharge extends \Eloquent {}
}

namespace App\Models\Base{
/**
 * Class Customer
 *
 * @property int $id
 * @property string $customer
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @package App\Models\Base
 * @method static \Illuminate\Database\Eloquent\Builder|Customer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Customer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Customer query()
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereCustomer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereUpdatedAt($value)
 */
	class Customer extends \Eloquent {}
}

namespace App\Models\Base{
/**
 * Class Doc
 *
 * @property int $id
 * @property string $title
 * @property string $text
 * @property int $user_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @package App\Models\Base
 * @method static \Illuminate\Database\Eloquent\Builder|Doc newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Doc newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Doc query()
 * @method static \Illuminate\Database\Eloquent\Builder|Doc whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Doc whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Doc whereText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Doc whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Doc whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Doc whereUserId($value)
 */
	class Doc extends \Eloquent {}
}

namespace App\Models\Base{
/**
 * Class DocsLog
 *
 * @property int $id
 * @property string $title
 * @property string $text
 * @property int $user_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @package App\Models\Base
 * @method static \Illuminate\Database\Eloquent\Builder|DocsLog newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DocsLog newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DocsLog query()
 * @method static \Illuminate\Database\Eloquent\Builder|DocsLog whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DocsLog whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DocsLog whereText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DocsLog whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DocsLog whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DocsLog whereUserId($value)
 */
	class DocsLog extends \Eloquent {}
}

namespace App\Models\Base{
/**
 * Class DocsToModel
 *
 * @property int $id
 * @property int $doc_id
 * @property int $model_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @package App\Models\Base
 * @method static \Illuminate\Database\Eloquent\Builder|DocsToModel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DocsToModel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DocsToModel query()
 * @method static \Illuminate\Database\Eloquent\Builder|DocsToModel whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DocsToModel whereDocId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DocsToModel whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DocsToModel whereModelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DocsToModel whereUpdatedAt($value)
 */
	class DocsToModel extends \Eloquent {}
}

namespace App\Models\Base{
/**
 * Class EeeeModel
 *
 * @property int $id
 * @property string $eeee
 * @property int $model_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @package App\Models\Base
 * @method static \Illuminate\Database\Eloquent\Builder|EeeeModel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EeeeModel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EeeeModel query()
 * @method static \Illuminate\Database\Eloquent\Builder|EeeeModel whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EeeeModel whereEeee($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EeeeModel whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EeeeModel whereModelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EeeeModel whereUpdatedAt($value)
 */
	class EeeeModel extends \Eloquent {}
}

namespace App\Models\Base{
/**
 * Class Gsxspare
 *
 * @property int $id
 * @property string $productname
 * @property string $part
 * @property string $partdesc
 * @property string $parttype
 * @property string $option
 * @property float $price
 * @property string $eee
 * @property string $sparepart
 * @property string $withsn
 * @property string $withdiag
 * @package App\Models\Base
 * @method static \Illuminate\Database\Eloquent\Builder|Gsxspare newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Gsxspare newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Gsxspare query()
 * @method static \Illuminate\Database\Eloquent\Builder|Gsxspare whereEee($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gsxspare whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gsxspare whereOption($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gsxspare wherePart($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gsxspare wherePartdesc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gsxspare whereParttype($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gsxspare wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gsxspare whereProductname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gsxspare whereSparepart($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gsxspare whereWithdiag($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gsxspare whereWithsn($value)
 */
	class Gsxspare extends \Eloquent {}
}

namespace App\Models\Base{
/**
 * Class KvaLimit
 *
 * @property int $id
 * @property int $customer_id
 * @property int $model_id
 * @property float $max_price
 * @property string $remark
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @package App\Models\Base
 * @method static \Illuminate\Database\Eloquent\Builder|KvaLimit newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|KvaLimit newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|KvaLimit query()
 * @method static \Illuminate\Database\Eloquent\Builder|KvaLimit whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KvaLimit whereCustomerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KvaLimit whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KvaLimit whereMaxPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KvaLimit whereModelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KvaLimit whereRemark($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KvaLimit whereUpdatedAt($value)
 */
	class KvaLimit extends \Eloquent {}
}

namespace App\Models\Base{
/**
 * Class Manufacturer
 *
 * @property int $id
 * @property string $manufacturer
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @package App\Models\Base
 * @method static \Illuminate\Database\Eloquent\Builder|Manufacturer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Manufacturer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Manufacturer query()
 * @method static \Illuminate\Database\Eloquent\Builder|Manufacturer whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Manufacturer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Manufacturer whereManufacturer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Manufacturer whereUpdatedAt($value)
 */
	class Manufacturer extends \Eloquent {}
}

namespace App\Models\Base{
/**
 * Class Model
 *
 * @property int $id
 * @property int $manufacturer_id
 * @property string $model
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property int $model_type_xcharge_id
 * @package App\Models\Base
 * @method static \Illuminate\Database\Eloquent\Builder|Model newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Model newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Model query()
 * @method static \Illuminate\Database\Eloquent\Builder|Model whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Model whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Model whereManufacturerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Model whereModel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Model whereModelTypeXchargeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Model whereUpdatedAt($value)
 */
	class Model extends \Eloquent {}
}

namespace App\Models\Base{
/**
 * Class ModelTypesXcharge
 *
 * @property int $id
 * @property string $short_name
 * @property string $name
 * @property float $ppi
 * @property string $cost_center
 * @property string $cost_element
 * @property int $per_part
 * @property int $per_call
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @package App\Models\Base
 * @method static \Illuminate\Database\Eloquent\Builder|ModelTypesXcharge newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ModelTypesXcharge newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ModelTypesXcharge query()
 * @method static \Illuminate\Database\Eloquent\Builder|ModelTypesXcharge whereCostCenter($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ModelTypesXcharge whereCostElement($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ModelTypesXcharge whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ModelTypesXcharge whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ModelTypesXcharge whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ModelTypesXcharge wherePerCall($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ModelTypesXcharge wherePerPart($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ModelTypesXcharge wherePpi($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ModelTypesXcharge whereShortName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ModelTypesXcharge whereUpdatedAt($value)
 */
	class ModelTypesXcharge extends \Eloquent {}
}

namespace App\Models\Base{
/**
 * Class Option
 *
 * @property int $id
 * @property string $name
 * @property int $poll_id
 * @property int $votes
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @package App\Models\Base
 * @method static \Illuminate\Database\Eloquent\Builder|Option newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Option newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Option query()
 * @method static \Illuminate\Database\Eloquent\Builder|Option whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Option whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Option whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Option wherePollId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Option whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Option whereVotes($value)
 */
	class Option extends \Eloquent {}
}

namespace App\Models\Base{
/**
 * Class Overtime
 *
 * @property int $id
 * @property int $user_id
 * @property \Carbon\Carbon $overtime_at
 * @property \Carbon\Carbon $started_at
 * @property \Carbon\Carbon $ended_at
 * @property int $overtime_minutes
 * @property string $reason
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property int $submitted
 * @package App\Models\Base
 * @method static \Illuminate\Database\Eloquent\Builder|Overtime newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Overtime newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Overtime query()
 * @method static \Illuminate\Database\Eloquent\Builder|Overtime whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Overtime whereEndedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Overtime whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Overtime whereOvertimeAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Overtime whereOvertimeMinutes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Overtime whereReason($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Overtime whereStartedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Overtime whereSubmitted($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Overtime whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Overtime whereUserId($value)
 */
	class Overtime extends \Eloquent {}
}

namespace App\Models\Base{
/**
 * App\Models\Base\PasswordReset
 *
 * @property string $email
 * @property string $token
 * @property string|null $created_at
 * @method static \Illuminate\Database\Eloquent\Builder|PasswordReset newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PasswordReset newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PasswordReset query()
 * @method static \Illuminate\Database\Eloquent\Builder|PasswordReset whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PasswordReset whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PasswordReset whereToken($value)
 */
	class PasswordReset extends \Eloquent {}
}

namespace App\Models\Base{
/**
 * Class Poll
 *
 * @property int $id
 * @property string $question
 * @property int $maxCheck
 * @property int $isClosed
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @package App\Models\Base
 * @method static \Illuminate\Database\Eloquent\Builder|Poll newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Poll newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Poll query()
 * @method static \Illuminate\Database\Eloquent\Builder|Poll whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Poll whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Poll whereIsClosed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Poll whereMaxCheck($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Poll whereQuestion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Poll whereUpdatedAt($value)
 */
	class Poll extends \Eloquent {}
}

namespace App\Models\Base{
/**
 * Class ReapirLog
 *
 * @property int $id
 * @property int $repair_id
 * @property string $log
 * @property int $closing_reason_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property int $user_id
 * @package App\Models\Base
 * @method static \Illuminate\Database\Eloquent\Builder|ReapirLog newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ReapirLog newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ReapirLog query()
 * @method static \Illuminate\Database\Eloquent\Builder|ReapirLog whereClosingReasonId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ReapirLog whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ReapirLog whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ReapirLog whereLog($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ReapirLog whereRepairId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ReapirLog whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ReapirLog whereUserId($value)
 */
	class ReapirLog extends \Eloquent {}
}

namespace App\Models\Base{
/**
 * Class Repair
 *
 * @property int $id
 * @property \Carbon\Carbon $started_at
 * @property int $rminstzlb_id
 * @property int $customer_id
 * @property int $manufacturer_id
 * @property int $model_id
 * @property int $repair_type_id
 * @property int $closing_reason_id
 * @property string $remarks
 * @property \Carbon\Carbon $closed_at
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property int $unit_id
 * @property string $g_no
 * @property int $order_no
 * @property int $user_id
 * @property float $costs
 * @property int $warranty
 * @property int $thirdpartydamage
 * @property int $kva_fee
 * @property float $kva_costs
 * @property string $location
 * @property int $cc_warranty
 * @package App\Models\Base
 * @method static \Illuminate\Database\Eloquent\Builder|Repair newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Repair newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Repair query()
 * @method static \Illuminate\Database\Eloquent\Builder|Repair whereCcWarranty($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Repair whereClosedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Repair whereClosingReasonId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Repair whereCosts($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Repair whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Repair whereCustomerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Repair whereGNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Repair whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Repair whereKvaCosts($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Repair whereKvaFee($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Repair whereLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Repair whereManufacturerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Repair whereModelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Repair whereOrderNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Repair whereRemarks($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Repair whereRepairTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Repair whereRminstzlbId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Repair whereStartedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Repair whereThirdpartydamage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Repair whereUnitId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Repair whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Repair whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Repair whereWarranty($value)
 */
	class Repair extends \Eloquent {}
}

namespace App\Models\Base{
/**
 * Class RepairFile
 *
 * @property int $id
 * @property int $repair_id
 * @property string $file_name
 * @property string $file_ext
 * @property string $storage_path
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @package App\Models\Base
 * @property int $size
 * @property string $type
 * @method static \Illuminate\Database\Eloquent\Builder|RepairFile newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RepairFile newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RepairFile query()
 * @method static \Illuminate\Database\Eloquent\Builder|RepairFile whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RepairFile whereFileExt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RepairFile whereFileName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RepairFile whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RepairFile whereRepairId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RepairFile whereSize($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RepairFile whereStoragePath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RepairFile whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RepairFile whereUpdatedAt($value)
 */
	class RepairFile extends \Eloquent {}
}

namespace App\Models\Base{
/**
 * Class RepairType
 *
 * @property int $id
 * @property string $type
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @package App\Models\Base
 * @method static \Illuminate\Database\Eloquent\Builder|RepairType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RepairType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RepairType query()
 * @method static \Illuminate\Database\Eloquent\Builder|RepairType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RepairType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RepairType whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RepairType whereUpdatedAt($value)
 */
	class RepairType extends \Eloquent {}
}

namespace App\Models\Base{
/**
 * Class Rminstzlb
 *
 * @property int $id
 * @property int $rminst
 * @property int $zlb
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property int $calltype_id
 * @property \Carbon\Carbon $zlb_created_at
 * @package App\Models\Base
 * @method static \Illuminate\Database\Eloquent\Builder|Rminstzlb newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Rminstzlb newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Rminstzlb query()
 * @method static \Illuminate\Database\Eloquent\Builder|Rminstzlb whereCalltypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Rminstzlb whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Rminstzlb whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Rminstzlb whereRminst($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Rminstzlb whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Rminstzlb whereZlb($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Rminstzlb whereZlbCreatedAt($value)
 */
	class Rminstzlb extends \Eloquent {}
}

namespace App\Models\Base{
/**
 * Class Scrap
 *
 * @property int $id
 * @property string $serial
 * @property string $imei
 * @property string $package
 * @property int $scraped
 * @property \Carbon\Carbon $scrape_date
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @package App\Models\Base
 * @method static \Illuminate\Database\Eloquent\Builder|Scrap newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Scrap newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Scrap query()
 * @method static \Illuminate\Database\Eloquent\Builder|Scrap whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Scrap whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Scrap whereImei($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Scrap wherePackage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Scrap whereScrapeDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Scrap whereScraped($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Scrap whereSerial($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Scrap whereUpdatedAt($value)
 */
	class Scrap extends \Eloquent {}
}

namespace App\Models\Base{
/**
 * Class Spare
 *
 * @property int $id
 * @property int $sap_no
 * @property string $sap_desc
 * @property int $manufacturer_id
 * @property int $model_id
 * @property int $customer_id
 * @property string $manufacturer_part_no
 * @property string $manufacturer_part_desc
 * @property string $manufacturer_remarks
 * @property float $price_replace
 * @property float $price_stock
 * @property \Carbon\Carbon $price_replace_date
 * @property \Carbon\Carbon $price_stock_date
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @package App\Models\Base
 * @method static \Illuminate\Database\Eloquent\Builder|Spare newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Spare newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Spare query()
 * @method static \Illuminate\Database\Eloquent\Builder|Spare whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Spare whereCustomerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Spare whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Spare whereManufacturerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Spare whereManufacturerPartDesc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Spare whereManufacturerPartNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Spare whereManufacturerRemarks($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Spare whereModelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Spare wherePriceReplace($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Spare wherePriceReplaceDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Spare wherePriceStock($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Spare wherePriceStockDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Spare whereSapDesc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Spare whereSapNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Spare whereUpdatedAt($value)
 */
	class Spare extends \Eloquent {}
}

namespace App\Models\Base{
/**
 * Class SparesToRepair
 *
 * @property int $id
 * @property int $repair_id
 * @property int $spare_id
 * @property int $status
 * @property string $serial_old
 * @property string $serial_new
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property int $type_id
 * @package App\Models\Base
 * @property string|null $remarks
 * @property string|null $tracking
 * @method static \Illuminate\Database\Eloquent\Builder|SparesToRepair newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SparesToRepair newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SparesToRepair query()
 * @method static \Illuminate\Database\Eloquent\Builder|SparesToRepair whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SparesToRepair whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SparesToRepair whereRemarks($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SparesToRepair whereRepairId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SparesToRepair whereSerialNew($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SparesToRepair whereSerialOld($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SparesToRepair whereSpareId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SparesToRepair whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SparesToRepair whereTracking($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SparesToRepair whereTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SparesToRepair whereUpdatedAt($value)
 */
	class SparesToRepair extends \Eloquent {}
}

namespace App\Models\Base{
/**
 * Class Unit
 *
 * @property int $id
 * @property string $serial
 * @property int $manufacturer_id
 * @property int $model_id
 * @property int $customer_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @package App\Models\Base
 * @method static \Illuminate\Database\Eloquent\Builder|Unit newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Unit newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Unit query()
 * @method static \Illuminate\Database\Eloquent\Builder|Unit whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Unit whereCustomerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Unit whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Unit whereManufacturerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Unit whereModelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Unit whereSerial($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Unit whereUpdatedAt($value)
 */
	class Unit extends \Eloquent {}
}

namespace App\Models\Base{
/**
 * Class User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Carbon\Carbon $email_verified_at
 * @property string $password
 * @property string $remember_token
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property int $access_overtime
 * @property int $access_xcharge
 * @property int $access_scrape
 * @property int $access_parts
 * @property int $access_reports
 * @property int $access_stats
 * @property int $access_repairs
 * @property int $access_admin
 * @property string $location
 * @package App\Models\Base
 * @property int|null $technician
 * @property int $access_doa
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereAccessAdmin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereAccessDoa($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereAccessOvertime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereAccessParts($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereAccessRepairs($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereAccessReports($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereAccessScrape($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereAccessStats($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereAccessXcharge($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTechnician($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

namespace App\Models\Base{
/**
 * Class Vote
 *
 * @property int $id
 * @property int $user_id
 * @property int $option_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @package App\Models\Base
 * @method static \Illuminate\Database\Eloquent\Builder|Vote newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Vote newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Vote query()
 * @method static \Illuminate\Database\Eloquent\Builder|Vote whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vote whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vote whereOptionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vote whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vote whereUserId($value)
 */
	class Vote extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\CallType
 *
 * @property int $id
 * @property string $type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CallType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CallType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CallType whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CallType whereUpdatedAt($value)
 * @mixin \Eloquent
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CallType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CallType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CallType query()
 */
	class CallType extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Changelog
 *
 * @property int $id
 * @property int $version_id
 * @property string $type
 * @property string $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Changelog newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Changelog newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Changelog query()
 * @method static \Illuminate\Database\Eloquent\Builder|Changelog whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Changelog whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Changelog whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Changelog whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Changelog whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Changelog whereVersionId($value)
 */
	class Changelog extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ChangelogVersion
 *
 * @property int $id
 * @property string $version
 * @property string|null $description
 * @property int $published
 * @property string $published_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ChangelogVersion newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ChangelogVersion newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ChangelogVersion query()
 * @method static \Illuminate\Database\Eloquent\Builder|ChangelogVersion whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChangelogVersion whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChangelogVersion whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChangelogVersion wherePublished($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChangelogVersion wherePublishedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChangelogVersion whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChangelogVersion whereVersion($value)
 */
	class ChangelogVersion extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ClosingReason
 *
 * @property int $id
 * @property string $reason
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ClosingReason whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ClosingReason whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ClosingReason whereReason($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ClosingReason whereUpdatedAt($value)
 * @mixin \Eloquent
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ClosingReason newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ClosingReason newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ClosingReason query()
 */
	class ClosingReason extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\CrossCharge
 *
 * @property int $id
 * @property int $service_order
 * @property string $serial
 * @property string $cost_centre
 * @property string $cost_element
 * @property float $amount
 * @property string $text
 * @property int $charged
 * @property \Illuminate\Support\Carbon|null $charged_date
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $repair_id
 * @method static \Illuminate\Database\Eloquent\Builder|CrossCharge newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CrossCharge newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CrossCharge query()
 * @method static \Illuminate\Database\Eloquent\Builder|CrossCharge whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CrossCharge whereCharged($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CrossCharge whereChargedDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CrossCharge whereCostCentre($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CrossCharge whereCostElement($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CrossCharge whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CrossCharge whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CrossCharge whereRepairId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CrossCharge whereSerial($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CrossCharge whereServiceOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CrossCharge whereText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CrossCharge whereUpdatedAt($value)
 */
	class CrossCharge extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Customer
 *
 * @property int $id
 * @property string $customer
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Customer whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Customer whereCustomer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Customer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Customer whereUpdatedAt($value)
 * @mixin \Eloquent
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Customer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Customer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Customer query()
 */
	class Customer extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\DOA
 *
 * @property int $id
 * @property string $serial
 * @property int $sap_no
 * @property int $service_order
 * @property string $doa_description
 * @property int $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|DOA newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DOA newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DOA query()
 * @method static \Illuminate\Database\Eloquent\Builder|DOA whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DOA whereDoaDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DOA whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DOA whereSapNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DOA whereSerial($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DOA whereServiceOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DOA whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DOA whereUserId($value)
 */
	class DOA extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\DoaSpeedItem
 *
 * @property int $id
 * @property int $sap_no
 * @property int $sap_desc
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|DoaSpeedItem newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DoaSpeedItem newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DoaSpeedItem query()
 * @method static \Illuminate\Database\Eloquent\Builder|DoaSpeedItem whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DoaSpeedItem whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DoaSpeedItem whereSapDesc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DoaSpeedItem whereSapNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DoaSpeedItem whereUpdatedAt($value)
 */
	class DoaSpeedItem extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Doc
 *
 * @property int $id
 * @property string $title
 * @property string $text
 * @property int $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Doc newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Doc newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Doc query()
 * @method static \Illuminate\Database\Eloquent\Builder|Doc whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Doc whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Doc whereText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Doc whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Doc whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Doc whereUserId($value)
 */
	class Doc extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\DocsLog
 *
 * @property int $id
 * @property string $title
 * @property string $text
 * @property int $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|DocsLog newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DocsLog newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DocsLog query()
 * @method static \Illuminate\Database\Eloquent\Builder|DocsLog whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DocsLog whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DocsLog whereText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DocsLog whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DocsLog whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DocsLog whereUserId($value)
 */
	class DocsLog extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\DocsToModel
 *
 * @property int $id
 * @property int $doc_id
 * @property int $model_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|DocsToModel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DocsToModel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DocsToModel query()
 * @method static \Illuminate\Database\Eloquent\Builder|DocsToModel whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DocsToModel whereDocId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DocsToModel whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DocsToModel whereModelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DocsToModel whereUpdatedAt($value)
 */
	class DocsToModel extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\EeeeModel
 *
 * @property int $id
 * @property string $eeee
 * @property int $model_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\EeeeModel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\EeeeModel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\EeeeModel query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\EeeeModel whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\EeeeModel whereEeee($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\EeeeModel whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\EeeeModel whereModelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\EeeeModel whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class EeeeModel extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Gsxspare
 *
 * @property int $id
 * @property string|null $productname
 * @property string|null $part
 * @property string|null $partdesc
 * @property string|null $parttype
 * @property string|null $option
 * @property float|null $price
 * @property string|null $eee
 * @property string|null $sparepart
 * @property string|null $withsn
 * @property string|null $withdiag
 * @method static \Illuminate\Database\Eloquent\Builder|Gsxspare newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Gsxspare newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Gsxspare query()
 * @method static \Illuminate\Database\Eloquent\Builder|Gsxspare whereEee($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gsxspare whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gsxspare whereOption($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gsxspare wherePart($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gsxspare wherePartdesc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gsxspare whereParttype($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gsxspare wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gsxspare whereProductname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gsxspare whereSparepart($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gsxspare whereWithdiag($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gsxspare whereWithsn($value)
 */
	class Gsxspare extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\KvaFiles
 *
 * @property int $id
 * @property string $name
 * @property string $file_path
 * @property int|null $repair_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|KvaFiles newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|KvaFiles newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|KvaFiles query()
 * @method static \Illuminate\Database\Eloquent\Builder|KvaFiles whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KvaFiles whereFilePath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KvaFiles whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KvaFiles whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KvaFiles whereRepairId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KvaFiles whereUpdatedAt($value)
 */
	class KvaFiles extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\KvaLimit
 *
 * @property int $id
 * @property int $customer_id
 * @property int $model_id
 * @property float $max_price
 * @property string $remark
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\KvaLimit whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\KvaLimit whereCustomerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\KvaLimit whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\KvaLimit whereMaxPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\KvaLimit whereModelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\KvaLimit whereRemark($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\KvaLimit whereUpdatedAt($value)
 * @mixin \Eloquent
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\KvaLimit newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\KvaLimit newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\KvaLimit query()
 */
	class KvaLimit extends \Eloquent {}
}

namespace App\Models{
/**
 * Class Manufacturer
 *
 * @property int $id
 * @property string $manufacturer
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Manufacturer whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Manufacturer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Manufacturer whereManufacturer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Manufacturer whereUpdatedAt($value)
 * @mixin \Eloquent
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Manufacturer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Manufacturer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Manufacturer query()
 */
	class Manufacturer extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Model
 *
 * @property int $id
 * @property int $manufacturer_id
 * @property string $model
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Model whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Model whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Model whereManufacturerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Model whereModel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Model whereUpdatedAt($value)
 * @mixin \Eloquent
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Model newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Model newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Model query()
 * @property int $model_type_xcharge_id
 * @method static \Illuminate\Database\Eloquent\Builder|Model whereModelTypeXchargeId($value)
 */
	class Model extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ModelTypesXcharge
 *
 * @property int $id
 * @property string $short_name
 * @property string $name
 * @property float $ppi
 * @property string $cost_center
 * @property string $cost_element
 * @property int $per_part
 * @property int $per_call
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ModelTypesXcharge newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ModelTypesXcharge newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ModelTypesXcharge query()
 * @method static \Illuminate\Database\Eloquent\Builder|ModelTypesXcharge whereCostCenter($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ModelTypesXcharge whereCostElement($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ModelTypesXcharge whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ModelTypesXcharge whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ModelTypesXcharge whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ModelTypesXcharge wherePerCall($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ModelTypesXcharge wherePerPart($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ModelTypesXcharge wherePpi($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ModelTypesXcharge whereShortName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ModelTypesXcharge whereUpdatedAt($value)
 */
	class ModelTypesXcharge extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Option
 *
 * @property int $id
 * @property string $name
 * @property int $poll_id
 * @property \Illuminate\Database\Eloquent\Collection|\App\Models\Vote[] $votes
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Poll $poll
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Option newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Option newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Option query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Option whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Option whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Option whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Option wherePollId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Option whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Option whereVotes($value)
 * @mixin \Eloquent
 */
	class Option extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Overtime
 *
 * @property int $id
 * @property int $user_id
 * @property \Illuminate\Support\Carbon $overtime_at
 * @property \Illuminate\Support\Carbon $started_at
 * @property \Illuminate\Support\Carbon $ended_at
 * @property int $overtime_minutes
 * @property string $reason
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $submitted
 * @method static \Illuminate\Database\Eloquent\Builder|Overtime newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Overtime newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Overtime query()
 * @method static \Illuminate\Database\Eloquent\Builder|Overtime whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Overtime whereEndedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Overtime whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Overtime whereOvertimeAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Overtime whereOvertimeMinutes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Overtime whereReason($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Overtime whereStartedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Overtime whereSubmitted($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Overtime whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Overtime whereUserId($value)
 */
	class Overtime extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\PasswordReset
 *
 * @property string $email
 * @property string $token
 * @property string|null $created_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PasswordReset whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PasswordReset whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PasswordReset whereToken($value)
 * @mixin \Eloquent
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PasswordReset newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PasswordReset newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PasswordReset query()
 */
	class PasswordReset extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Poll
 *
 * @property int $id
 * @property string $question
 * @property int $maxCheck
 * @property int $isClosed
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Option[] $options
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Poll newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Poll newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Poll query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Poll whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Poll whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Poll whereIsClosed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Poll whereMaxCheck($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Poll whereQuestion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Poll whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class Poll extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ReapirLog
 *
 * @property int $id
 * @property int $repair_id
 * @property string $log
 * @property int|null $closing_reason_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $user_id
 * @method static \Illuminate\Database\Eloquent\Builder|ReapirLog newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ReapirLog newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ReapirLog query()
 * @method static \Illuminate\Database\Eloquent\Builder|ReapirLog whereClosingReasonId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ReapirLog whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ReapirLog whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ReapirLog whereLog($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ReapirLog whereRepairId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ReapirLog whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ReapirLog whereUserId($value)
 */
	class ReapirLog extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Repair
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon $started_at
 * @property int $rminstzlb_id
 * @property int $customer_id
 * @property string $serial
 * @property int $manufacturer_id
 * @property int $model_id
 * @property int $repair_type_id
 * @property int $closing_reason_id
 * @property string $remarks
 * @property \Illuminate\Support\Carbon $closed_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Repair whereClosedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Repair whereClosingReasonId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Repair whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Repair whereCustomerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Repair whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Repair whereManufacturerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Repair whereModelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Repair whereRemarks($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Repair whereRepairTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Repair whereRminstzlbId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Repair whereSerial($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Repair whereStartedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Repair whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property int $unit_id
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Repair whereUnitId($value)
 * @property-read \App\Models\Rminstzlb $rminst
 * @property string|null $g_no
 * @property int|null $order_no
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Repair whereGNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Repair whereOrderNo($value)
 * @property int $user_id
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Repair whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Repair newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Repair newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Repair query()
 * @property float|null $costs
 * @property int|null $warranty
 * @property int|null $thirdpartydamage
 * @property int|null $kva_fee
 * @property float|null $kva_costs
 * @property string|null $location
 * @property int|null $cc_warranty
 * @method static \Illuminate\Database\Eloquent\Builder|Repair whereCcWarranty($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Repair whereCosts($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Repair whereKvaCosts($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Repair whereKvaFee($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Repair whereLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Repair whereThirdpartydamage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Repair whereWarranty($value)
 */
	class Repair extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\RepairFile
 *
 * @property int $id
 * @property int $repair_id
 * @property string $file_name
 * @property string $file_ext
 * @property string $storage_path
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\RepairFile newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\RepairFile newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\RepairFile query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\RepairFile whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\RepairFile whereFileExt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\RepairFile whereFileName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\RepairFile whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\RepairFile whereRepairId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\RepairFile whereStoragePath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\RepairFile whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property int $size
 * @property string $type
 * @method static \Illuminate\Database\Eloquent\Builder|RepairFile whereSize($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RepairFile whereType($value)
 */
	class RepairFile extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\RepairType
 *
 * @property int $id
 * @property string $type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\RepairType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\RepairType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\RepairType whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\RepairType whereUpdatedAt($value)
 * @mixin \Eloquent
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\RepairType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\RepairType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\RepairType query()
 */
	class RepairType extends \Eloquent {}
}

namespace App\Models{
/**
 * Class Rminstzlb
 *
 * @property int $id
 * @property int $rminst
 * @property int $zlb
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Rminstzlb whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Rminstzlb whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Rminstzlb whereRminst($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Rminstzlb whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Rminstzlb whereZlb($value)
 * @mixin \Eloquent
 * @property int $calltype_id
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Rminstzlb whereCalltypeId($value)
 * @property string $zlb_created_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Rminstzlb whereZlbCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Rminstzlb newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Rminstzlb newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Rminstzlb query()
 */
	class Rminstzlb extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Scrap
 *
 * @property int $id
 * @property string $serial
 * @property string|null $imei
 * @property string|null $package
 * @property int|null $scraped
 * @property \Illuminate\Support\Carbon|null $scrape_date
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Unit|null $unit
 * @method static \Illuminate\Database\Eloquent\Builder|Scrap newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Scrap newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Scrap query()
 * @method static \Illuminate\Database\Eloquent\Builder|Scrap whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Scrap whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Scrap whereImei($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Scrap wherePackage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Scrap whereScrapeDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Scrap whereScraped($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Scrap whereSerial($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Scrap whereUpdatedAt($value)
 */
	class Scrap extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Spare
 *
 * @property int $id
 * @property int $sap_no
 * @property string $sap_desc
 * @property int $manufacturer_id
 * @property int $model_id
 * @property int $customer_id
 * @property string $manufacturer_part_no
 * @property string $manufacturer_part_desc
 * @property string $manufacturer_remarks
 * @property float $price_replace
 * @property float $price_stock
 * @property \Illuminate\Support\Carbon $price_replace_date
 * @property \Illuminate\Support\Carbon $price_stock_date
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Spare whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Spare whereCustomerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Spare whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Spare whereManufacturerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Spare whereManufacturerPartDesc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Spare whereManufacturerPartNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Spare whereManufacturerRemarks($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Spare whereModelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Spare wherePriceReplace($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Spare wherePriceReplaceDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Spare wherePriceStock($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Spare wherePriceStockDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Spare whereSapDesc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Spare whereSapNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Spare whereUpdatedAt($value)
 * @mixin \Eloquent
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Spare newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Spare newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Spare query()
 */
	class Spare extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Spare
 *
 * @property int $id
 * @property int $user_id
 * @property string $description
 * @property int $status
 * @property int $spare_to_repairs_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Spare whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Spare whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Spare whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Spare whereSpareToRepairsId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Spare whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Spare whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Spare whereUpdatedAt($value)
 * @mixin \Eloquent
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Spare newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Spare newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Spare query()
 */
	class SpareLog extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\SparesToRepair
 *
 * @property int $id
 * @property int $repair_id
 * @property int $spare_id
 * @property string $serial_old
 * @property string $serial_new
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SparesToRepair whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SparesToRepair whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SparesToRepair whereRepairId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SparesToRepair whereSerialNew($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SparesToRepair whereSerialOld($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SparesToRepair whereSpareId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SparesToRepair whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property-read \App\Models\Repair $repair
 * @property-read \App\Models\Spare $spare
 * @property int $type_id
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SparesToRepair whereTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SparesToRepair newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SparesToRepair newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SparesToRepair query()
 * @property int|null $status
 * @property string|null $remarks
 * @property string|null $tracking
 * @method static \Illuminate\Database\Eloquent\Builder|SparesToRepair whereRemarks($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SparesToRepair whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SparesToRepair whereTracking($value)
 */
	class SparesToRepair extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Unit
 *
 * @property int $id
 * @property string $serial
 * @property int $manufacturer_id
 * @property int $model_id
 * @property int $customer_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Unit whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Unit whereCustomerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Unit whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Unit whereManufacturerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Unit whereModelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Unit whereSerial($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Unit whereUpdatedAt($value)
 * @mixin \Eloquent
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Unit newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Unit newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Unit query()
 */
	class Unit extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property-read \Illuminate\Database\Eloquent\Collection|\Inani\Larapoll\Option[] $options
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User query()
 * @property int $access_overtime
 * @property int $access_xcharge
 * @property int $access_scrape
 * @property int $access_parts
 * @property int $access_reports
 * @property int $access_stats
 * @property int $access_repairs
 * @property int $access_admin
 * @property string $location
 * @property int|null $technician
 * @property int $access_doa
 * @property-read int|null $notifications_count
 * @property-read int|null $options_count
 * @method static \Illuminate\Database\Eloquent\Builder|User whereAccessAdmin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereAccessDoa($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereAccessOvertime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereAccessParts($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereAccessRepairs($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereAccessReports($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereAccessScrape($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereAccessStats($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereAccessXcharge($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTechnician($value)
 */
	class User extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Vote
 *
 * @property int $id
 * @property int $user_id
 * @property int $option_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Option $option
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Vote newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Vote newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Vote query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Vote whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Vote whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Vote whereOptionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Vote whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Vote whereUserId($value)
 * @mixin \Eloquent
 */
	class Vote extends \Eloquent {}
}

