<?php

namespace img\credit_calculator\interfaces;

/**
 * Методы, подлежащие реализации кредитным калькулятором
 *
 * @author Maxim Ishchenko <maxim.ishchenko@gmail.com>
 * @package  maximishchenko/credit_calculator
 * @copyright Maxim Ishchenko <maxim.ishchenko@gmail.com>
 * @license BSD-3-Clause https://opensource.org/licenses/BSD-3-Clause
 * @version 2.0
 */
interface CreditCalculatorInterface
{
    /**
     * Стоимость а/м, руб
     *
     * @access  public
     * @return float стоимость а/м, руб
     */
    public function getCarPrice();

    /**
     * Расчет первоначального взноса, руб
     *
     * @access  public
     * @return float первоначальный взнос, руб
     */
    public function getInitialPayment();

    /**
     * Расчет суммы кредита, руб
     *
     * @access  public
     * @return float сумма кредита, руб
     */
    public function getAmountOfCredit();

    /**
     * Расчет первоначального взноса, %
     *
     * @access  public
     * @return integer первоначальный взнос, %
     */
    public function getInitialPaymentPercentages();

    /**
     * Срок кредита, мес
     *
     * @access  public
     * @return integer срок кредита, мес
     */
    public function getCreditTime();

    /**
     * Процентная ставка, %
     *
     * @access  public
     * @return integer процентная ставка, %
     */
    public function getInterestRate();

    /**
     * Расчет ежемесячного платежа, руб.
     *
     * @access  public
     * @return float ежемесячный платеж, руб.
     */
    public function getMonthlyPayment();

    /**
     * Расчет стоимости каско, руб
     *
     * @access  public
     * @return float расчет стоимости каско, руб
     */
    public function getCascoPrice();

    /**
     * Расчет стоимости страхования жизни, руб
     *
     * @access  public
     * @return float расчет стоимости страхования жизни, руб
     */
    public function getInsurancePrice();

    /**
     * Возвращает процентную ставку расчета КАСКО, %
     *
     * @access  public
     * @return integer процентная ставка расчета КАСКО, %
     */
    public function getCascoPercentages();

    /**
     * Возвращает процентную ставку расчета страхования жизни, %
     *
     * @access  public
     * @return integer процентная ставка страхования жизни, %
     */
    public function getInsurancePercentages();

    /**
     * Расчет стоимости остаточного платежа, руб.
     *
     * @access  public
     * @return float стоимость остаточного платежа, руб.
     */
    public function getDeferredPaymentPrice();

    /**
     * Возвращает процентную ставку отложенного платежа, %
     *
     * @access  public
     * @return integer процентная ставка отложенного платежа, %
     */
    public function getDeferredPercentages();
}