<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       https://github.com/lincoln-howard-jr
 * @since      1.0.0
 *
 * @package    Gmu_Jwst
 * @subpackage Gmu_Jwst/admin/partials
 */
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->
<h2>JWST Galaxy Spectral Simulator Tool</h2>
<p>This tool is used to simulate Galaxy Spectra in the JWST wavelength regime. These models use the spectral synthesis code, Cloudy, and employ an integrated modeling approach using photoionization and stellar population synthesis models in which both the line and emergent continuum is predicted from gas exposed to the ionizing radiation from a young starburst and an active galactic nuclei (AGN). The user can select the fraction of the total luminosity from the AGN, the gas density, the ionization parameter, gas phase metallicity, and stopping column density.  The tool generates the brightest predicted lines in the JWST wavelength regime and the transmitted continuum is plotted for download. <a href="https://ui.adsabs.harvard.edu/abs/2018ApJ...858...38S/abstract">Please see and reference Satyapal et al. 2018</a> for details.</p>
