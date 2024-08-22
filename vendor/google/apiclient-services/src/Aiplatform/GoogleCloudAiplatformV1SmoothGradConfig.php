<?php
/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

namespace Google\Service\Aiplatform;

class GoogleCloudAiplatformV1SmoothGradConfig extends \Google\Model
{
  /**
   * @var GoogleCloudAiplatformV1FeatureNoiseSigma
   */
  public $featureNoiseSigma;
  protected $featureNoiseSigmaType = GoogleCloudAiplatformV1FeatureNoiseSigma::class;
  protected $featureNoiseSigmaDataType = '';
  /**
   * @var float
   */
  public $noiseSigma;
  /**
   * @var int
   */
  public $noisySampleCount;

  /**
   * @param GoogleCloudAiplatformV1FeatureNoiseSigma
   */
  public function setFeatureNoiseSigma(GoogleCloudAiplatformV1FeatureNoiseSigma $featureNoiseSigma)
  {
    $this->featureNoiseSigma = $featureNoiseSigma;
  }
  /**
   * @return GoogleCloudAiplatformV1FeatureNoiseSigma
   */
  public function getFeatureNoiseSigma()
  {
    return $this->featureNoiseSigma;
  }
  /**
   * @param float
   */
  public function setNoiseSigma($noiseSigma)
  {
    $this->noiseSigma = $noiseSigma;
  }
  /**
   * @return float
   */
  public function getNoiseSigma()
  {
    return $this->noiseSigma;
  }
  /**
   * @param int
   */
  public function setNoisySampleCount($noisySampleCount)
  {
    $this->noisySampleCount = $noisySampleCount;
  }
  /**
   * @return int
   */
  public function getNoisySampleCount()
  {
    return $this->noisySampleCount;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAiplatformV1SmoothGradConfig::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1SmoothGradConfig');
