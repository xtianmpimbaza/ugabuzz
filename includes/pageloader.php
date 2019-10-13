<?php
session_start();
//error_reporting(0);
//define('MAIN_PATH', $_SERVER['DOCUMENT_ROOT'] . '/');
//require_once MAIN_PATH . 'includes/functions.php';

require_once '../includes/functions.php';

$funs = new Functions();

$wallet_id = $_SESSION['users_id'];
$users_id = $_SESSION['users_id'];

$basepath = $funs->getBaseUrl();

if (isset($_POST['token'])) {
    $token = $_POST['token'];

    switch ($token) {
        case "load_balance":
            $balance = $funs->getBnuBalance($_SESSION['users_id']);
            print $balance;
            break;
        case "convert_balance":
            $amount = $_POST['amount'];

            $rate = $funs->getExchangeRate();
            $extraction = json_decode($rate, true);

            if (is_array($extraction)) {
                foreach ($extraction as $curr => $value) {
                    if ($value['currencySymbol'] == 'BNU') {
                        $amt = (float)$amount / (float)$value['Buy'];
                        //get fees
                        $fees_note = '';
//get all fees
                        $getfees = array("*" => "");
                        $rows = $funs->customSelectQuery('withdraw_fees', $getfees, "WHERE currency=" . $_POST['paytype']);

                        //print_r($rows);

                        foreach ($rows as $row) {
                            if ($row['fee'] < 50) {
                                $deduct = $amount * ($row['fee'] / 100);
                                $note = '(' . number_format($row['fee'], 2) . '%)';
                            } else {
                                $deduct = $row['fee'];
                                $note = '';
                            }
                            $fees_note = $fees_note . '- ' . $row['detail'] . ' ' . $note . ' - ' . number_format($deduct, 2) . '<br>';
                            $amount = $amount - $deduct;
                        }
                        $fees_note = $fees_note . 'You will receive ' . number_format($amount, 2);
                        echo $fees_note;

                    }
                }
            }

            break;
        case "convert_to_bnu":
            $amount = $_POST['amount'];
            $amount = $_POST['wallet'];
            $amount = $_POST['currency'];

            //transfer amount to bta float respective currency wallet
            //send equivalent to his bnu wallet from bta bnu wallet

            echo "Unsuccessful operation";

            break;

        case "load_transactions":
            $tx = $funs->countTx($wallet_id);
            print_r($tx);
            break;
        case "load_graph":
            $dates = array();
            $eth = array();
            $ltc = array();
            $btc = array();
            $bnu = array();
            //$total = array();

            $sql = array("DATE_FORMAT(temp_tx.tstamp,'%Y-%m-%d') as report_date" => "", "currencies.currency" => "", "sum(`temp_tx`.`bnu_amount`) as bnu_amount" => "", "sum(temp_tx.crypto_amt) as crypto_amt" => "");
            $rows = $funs->customSelectQuery('temp_tx LEFT JOIN currencies on temp_tx.currencies_id=currencies.id LEFT JOIN wallets on temp_tx.wallet_id=wallets.name', $sql, "WHERE DATEDIFF(NOW(),tstamp)<25 AND `bnu_status`='paid' AND wallets.users_id=" . $users_id . "  GROUP by report_date,currencies_id");

            if (is_array($rows)) {
                foreach ($rows as $sel) {
                    array_push($dates, $sel['report_date']);

                    switch ($sel['currency']) {
                        case 'BTC':
                            //print('BTC - '.$sel['report_date'].'-'.$sel['bnu_amount']);
                            array_push($btc, $sel['bnu_amount']);
                            array_push($eth, 0);
                            array_push($ltc, 0);
                            array_push($bnu, 0);
                            break;
                        case 'BNU':
                        case 'MTNAT':
                            array_push($bnu, $sel['bnu_amount']);
                            array_push($btc, 0);
                            array_push($eth, 0);
                            array_push($ltc, 0);
                            break;
                        case 'ETH':
                            array_push($eth, $sel['bnu_amount']);
                            array_push($bnu, 0);
                            array_push($btc, 0);
                            array_push($ltc, 0);
                            break;
                        case 'LTC':
                            array_push($ltc, $sel['bnu_amount']);
                            array_push($bnu, 0);
                            array_push($btc, 0);
                            array_push($eth, 0);
                            break;
                    }
                }
            } else {
                array_push($btc, 0);
                array_push($eth, 0);
                array_push($ltc, 0);
                array_push($bnu, 0);
            }
            $funs->draw_graph(array_unique($dates), $btc, $eth, $bnu, $ltc, "Transaction History", "Amount(UGX)", "line");
            break;
        case "load_exchange_rate":
            $tx = $funs->getExchangeRate();
            $extraction = json_decode($tx, true);
            ?>
            <table class="table table-hover table-vcenter" style="">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Currency</th>
                    <th>Rate</th>

                </tr>
                </thead>
                <tbody>

                <?php
                $id = 0;
                if (is_array($extraction)) {
                    foreach ($extraction as $curr => $value) {
                        $sell = number_format((float)$value['Sell'], 2, '.', ',');
                        $buy = number_format((float)$value['Buy'], 2, '.', ',');
                        $id += 1;

                        ?>
                        <tr>
                            <td>
                                <?php echo $id; ?>
                            </td>
                            <td>
                                <?php echo $value['currencySymbol']; ?>
                            </td>
                            <td>
                                <?php echo $buy; ?>
                            </td>

                        </tr>
                        <?php
                    }
                }
                ?>
                </tbody>
            </table>
            <?php
            break;
        case "user_account":
            $acc = $funs->getAccount($users_id);
            if (is_array($acc)) {
                foreach ($acc as $log) {
                    ?>

                    <div class="card prodn col-md-6">
                        <div class="caption">
                            <div>
                                <h6>Name</h6>
                                <p><?php echo $log['name']; ?></p>
                                <hr>
                                <h6>Email</h6>
                                <p> <?php echo $log['email']; ?></p>
                                <hr>
                                <h6>Contact</h6>
                                <p> <?php echo $log['tel']; ?></p>
                                <hr>
                                <h6>Time</h6>
                                <p><?php echo $log['time']; ?></p>
                                <hr>
                                <h6>Type</h6>
                                <p><?php echo $log['type']; ?></p>
                                <hr>
                                <h6>Website</h6>
                                <p><?php echo $log['website']; ?></p>
                                <hr>
                                <h6>Address</h6>
                                <p><?php echo $log['address']; ?></p>
                                <hr>
                                <div style="width: 100%; text-align:center; padding-top: 10px;">
                                    <button type="submit" style="width: 120px;"
                                            class="btn btn-sm btn-warning edit_account"
                                            onclick="addUser('<?php echo($log['name']); ?>','<?php echo($log['email']); ?>','<?php echo($log['tel']); ?>','<?php echo($log['website']); ?>','<?php echo($log['address']); ?>','<?php echo($log['bank_branch']); ?>',)">
                                        EDIT INFO
                                    </button>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="card prodn col-md-6">
                        <div class="caption">
                            <div>

                                <h6>Country</h6>
                                <p><?php echo $log['bank_country']; ?></p>
                                <hr>
                                <h6>City</h6>
                                <p> <?php echo $log['bank_city']; ?></p>
                                <hr>
                                <h6>Bank Name</h6>
                                <p><?php echo $log['bank_name']; ?></p>
                                <hr>
                                <h6>Branch</h6>
                                <p> <?php echo $log['bank_branch']; ?></p>
                                <hr>
                                <h6>Streat / Road</h6>
                                <p> <?php echo $log['bank_addr1']; ?></p>
                                <hr>
                                <h6>Account name</h6>
                                <p><?php echo $log['bank_ac_name']; ?></p>
                                <hr>
                                <h6>Account number</h6>
                                <p> <?php echo $log['bank_ac_number']; ?></p>
                                <hr>
                                <h6>Mobile Money</h6>
                                <p><?php echo $log['mm_number']; ?></p>
                                <hr>
                                <?php if ((int)$log['bank_verify'] != 2) { ?>
                                    <div style="width: 100%; text-align:center; padding-top: 10px;">
                                        <button type="submit" style="width: 120px;"
                                                class="btn btn-sm btn-warning edit_account"
                                                onclick="addbank('<?php echo($log['bank_name']); ?>','<?php echo($log['bank_branch']); ?>','<?php echo($log['bank_ac_name']); ?>','<?php echo($log['bank_ac_number']); ?>','<?php echo($log['mm_number']); ?>','<?php echo($log['bank_branch']); ?>',)">
                                            UPDATE BANK
                                        </button>
                                    </div>
                                <?php } ?>


                            </div>
                        </div>
                    </div>


                    <?php
                }
            }
            break;

        case "user_account_tx":
            $balance = $funs->getKYCstatus($users_id);
            break;
        case "fetch_account_modal":
            $result = $funs->getEditInfo($_SESSION['users_id']);
            echo json_encode($result);
            break;
        case "add_new_wallet":
            $insert = $funs->createWallet($_SESSION['name'], $_POST['wallet_currency'], $users_id);
            print_r($insert);
            break;
        case "transaction_logs":
            $logs = $funs->getTxLogs($users_id);
            $counter = sizeof($logs);
            if (is_array($logs)) {
                foreach ($logs as $log) {
                    ?>
                    <tr>
                        <td>
                            <?php echo $log['tstamp']; ?>
                        </td>
                        <td>
                            <?php echo $log['id']; ?>
                        </td>

                        <td>
                            <?php
                            switch ($log['currency']) {
                                case "BTC":
                                    echo $log['currency'] . " (" . number_format($log['crypto_amt'], 8) . ")";
                                    break;
                                case "BNU":
                                case "MTNAT":
                                    echo $log['currency'] . " (" . number_format($log['crypto_amt']) . ")";
                                    break;
                                case "ETH":
                                    echo $log['currency'] . " (" . number_format($log['crypto_amt'], 8) . ")";
                                    break;
                                case "LTC":
                                    echo $log['currency'] . " (" . number_format($log['crypto_amt'], 8) . ")";
                                    break;
                                default:
                                    echo $log['currency'] . " (" . number_format($log['crypto_amt'], 8) . ")";
                                    break;
                            }

                            ?>
                        </td>
                        <!-- td>
                        <?php //echo number_format(($log['bnu_amount']), 0, '.', ','); ?>

                    </td-->
                        <?php
                        switch ($log['status']) {
                            case 'pending':
                                $class = "btn-warning";
                                break;
                            case 'paid':
                                if ($log['bnu_amount'] > 0) {
                                    $class = "btn-success";
                                } else {
                                    $class = "btn-danger";
                                }

                                break;

                            default:
                                $class = "btn-danger";
                                break;
                        }
                        //explode bnu_exp url to extract bnu key
                        $bomb_one = explode("?", $log['bnu_exp']);
                        //explode key to extract only txid value
                        $bomb_two = explode("=", $bomb_one[1]);
                        //query oolarpc for tx details

                        $postfields = "key=e99f6070396eebaeac5882c61e4fa85f64de9484&method=checkTransaction&txid=" . $bomb_two[1];
                        //echo $postfields."<br><br>";
                        //curl_setopt($ch, CURLOPT_URL,"http://localhost/bitcoinnode/bc/futa_rpc.php");
                        $ch = curl_init($funs->oola_api);
                        curl_setopt($ch, CURLOPT_POST, 1);
                        curl_setopt($ch, CURLOPT_POSTFIELDS, $postfields);
                        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

                        $server_output = curl_exec($ch);
                        $server_error = curl_errno($ch);
                        curl_close($ch);
                        if ($server_error) {
                            $confirmations = "NULL";
                        } else {
                            $convert_output = json_decode($server_output);
                            $confirmations = $convert_output->{'response'}->{'confirmations'};
                        }


                        ?>

                        <script>
                            <?php
                            //echo "console.log('".'"'.$server_output.'"'."')";
                            if ($log['no_confirms'] > 200) {
                                $clean_crypt_confs = "200+";
                            } else {
                                $clean_crypt_confs = $log['no_confirms'];
                            }
                            if ($confirmations > 0) {
                                $clean_bnu_confs = "1";
                            } else {
                                $clean_bnu_confs = $confirmations;
                            }
                            ?>
                        </script>
                        <td class="center v_link">

                            <button class="btn btn-sm <?php echo $class; ?>" style="color: #ffffff"
                                    onclick="getExplorer('<?php echo($log['tstamp']); ?>','<?php echo($log['currency']); ?>','<?php echo number_format(($log['bnu_amount']), 0, '.', ','); ?>','<?php echo $clean_crypt_confs; ?>','<?php echo $log['txid']; ?>','<?php echo $log['bnu_exp']; ?>','<?php echo $log['status']; ?>','<?php echo $clean_bnu_confs; ?>')">
                                <?php echo number_format($log['bnu_amount']); ?>
                            </button>
                        </td>
                    </tr>
                    <?php

                }
            }
            break;
        case "notifications":
//            $logs = $funs->getTxLogs($users_id);
            //$logs = $funs->customSelect("select * from logs where user_id = $users_id ORDER BY date DESC");
            $qry = array("*" => "");
            $logs = $funs->customSelectQuery('logs', $qry, "where user_id = " . $users_id . " ORDER BY date DESC");
            if (is_array($logs)) {
                foreach ($logs as $log) {
                    ?>
                    <tr>
                        <td>
                            <?php echo $log['date']; ?>
                        </td>
                        <td>
                            <?php echo $log['txt']; ?>
                        </td>
                    </tr>
                    <?php
                }
            }
            break;
        case "recent_logs":
            $logs = $funs->getRecentLogs($wallet_id);

            ?>
            <table class="table table-hover table-vcenter">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Date</th>
                    <th>Currency</th>
                    <th>Amount (UGX)</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $id = 0;
                if (is_array($logs)) {
                    foreach ($logs as $log) {
                        $id += 1;
                        ?>
                        <tr>
                            <td>
                                <?php echo $id; ?>
                            </td>
                            <td>
                                <?php echo $log['ostamp']; ?>
                            </td>
                            <td>
                                <?php echo $log['currency']; ?>
                            </td>
                            <td>
                                <?php echo number_format(($log['bnu_amount']), 0, '.', ','); ?>
                            </td>

                        </tr>
                        <?php
                    }
                }
                ?>
                </tbody>
            </table>
            <?php
            break;
        case "load_wallets_bal":
            $acc = $funs->getWalletsData($users_id);

            $id = 0;
            if (is_array($acc)) {
                foreach ($acc as $value) {
                    $id += 1;
                    ?>
                    <tr>
                        <td>
                            <?php echo $id; ?>
                        </td>
                        <td>

                            <?php echo "<img src='images/" . mb_strtolower($value['currency']) . ".png' class='icon' width=40 length=40>"; ?>

                            <?php echo $value['name']; ?>
                        </td>
                        <td>
                            <?php echo $value['currency_name']; ?>
                        </td>
                        <td>
                            <button type="button btn-sm" class="btn btn-success"><span
                                        class="filter-option pull-left"
                                        onclick="copyToClipboard('<?php echo($value['deposit_address']); ?>')">Copy Address</span>
                            </button>
                        </td>
                        <td>
                            <button type="button btn-sm" class="btn btn-success"><span
                                        class="filter-option pull-left"
                                        onclick="copyToClipboard('<?php echo($value['api_key']); ?>')">Copy Key</span>
                            </button>
                        </td>

                    </tr>

                    <?php
                }
            }
            break;
        case "deposit_to_wallet":
            $amount = $_POST['amount'];
            $link = $_POST['post_fields'];
            $source = $_POST['coin'];

            $curr = $funs->coinCurrency($source);
            $currency = $curr['currency'];

            $postfields = "method=pay&amount=" . $amount . "&currency=" . $currency;

            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $funs->oola_api);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $postfields);

            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $server_output = curl_exec($ch);
            $server_error = curl_error($ch);
            curl_close($ch);
            print_r($server_output);
            break;
        case 'update_count':
            $log_array = array("count('id') as count" => "");
            $logs = $funs->customSelectQuery('logs', $log_array, 'WHERE logs.user_id=' . $_SESSION['users_id'] . ' ORDER BY DATE DESC');
            echo $logs[0]['count'];
            break;
        default:
            echo "Error in connection";
    }

}
?>